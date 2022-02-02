<?php

namespace App\Http\Controllers;

use App\Models\CardInfo;
use App\Models\CardType;
use App\Models\Gift;
use App\Models\GiftCategory;
use App\Models\GiftUser;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function random(Request $request)
    {
        $user = \Auth::user();
        $timeStart = date('H:i:s', strtotime("8 PM"));
        $timeEnd = date('H:i:s', strtotime("9 PM"));
        if (!(date('H:i:s') > $timeStart && date('H:i:s') < $timeEnd)) {
            return response()->json(['error' => 1, 'message' => 'Chưa đến thời gian hái lộc 20-21h!']);
        }
        if ($user->times > 0) {
            $user->times = $user->times - 1;
            $user->save();
            $gift = Gift::where('quantity', '>', '0')->inRandomOrder()->first();
            if (!$gift) {
                return response()->json(['error' => 1, 'message' => 'Có lẽ là bạn quá đen cho tết 2022!']);
            }
            $gift->decrement('quantity', 1);
            $gift->save();
            GiftUser::create([
                'gift_id' => $gift->id,
                'user_id' => $user->id,
                'received' => ($gift->name == GiftCategory::GIFT_CARD) ? false : true,
                'value' => null
            ]);
            return response()->json(['error' => 0, 'img' => $gift->value]);
        }
        return response()->json(['error' => 1, 'message' => 'Bạn đã hết lượt, hãy làm nhiệm vụ ngay nào !']);
    }

    public function result(Request $request)
    {
        $giftUser = GiftUser::find($request->id);
		if($giftUser->user_id != auth()->user()->id){
			return abort(404);
		}
        if (!$giftUser) {
            return response()->json(['error' => 1, 'message' => 'Error something']);
        } else {
            $giftCate = GiftCategory::find($giftUser->gift->giftCategory_id);
            switch ($giftCate->name) {
                case GiftCategory::GIFT_CARD:
                    if ($giftUser->value == NULL) {
                        if (isset($request->nhamang)) {
                            //dd($request->nhamang);
							$str = $giftUser->gift->name;
							$str = preg_replace('/\D/', '', $str);
                            $card_type = CardType::where('name',strtolower($request->nhamang))->first()->id;
                            $card_info = CardInfo::where([['card_id',$card_type],['used',false],['value',$str]])->first();
                            if(!$card_info){
                                return response()->json(['error' => 0, 'type' => 3, 'value' => "Có lỗi không xác định, thử lại sau"]);
                            }
                            $card_info->used = true;
                            $card_info->save();
                            $giftUser->value = $request->nhamang."\nSeri:".$card_info->seri."\nPin:".$card_info->pin;
                            $giftUser->save();
                            return response()->json(['error' => 0, 'type' => 3, 'value' => $giftUser->value]);
                        }
                        return response()->json(['error' => 0, 'type' => 2]);
                    }
                    return response()->json(['error' => 0, 'type' => 3, 'value' => $giftUser->value]);
                    break;
                case GiftCategory::GIFT_WISH:
                    return response()->json(['error' => 0, 'type' => 1, 'img' => $giftUser->gift->value]);
                    break;
            }
        }
    }
    // 								 VTT  (Thẻ Viettel) 
    // 								 VNP  (Thẻ Vinaphone)
    // 								 VMS  (Thẻ Mobifone)
    public function login_buycard($userName, $password)
    {
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded'
            )
        ));
        $token_card = file_get_contents('https://banthe24h.vn/v2/PayCard/DangNhap?userName=' . $userName . '&password=' . $password, false, $context);

        if (!is_object(json_decode($token_card))) {
            return json_decode($token_card);
        } else {
            echo "Tài khoản hoặc mật khẩu không đúng vui lòng kiểm tra lại!";
            unset($token_card);
            die;
        }
    }



    public function buycard($card)
    {
        $token_card = $this->login_buycard('tantoan1909@gmail.com', 'Tantoan123');
        $header = array(
            "Content-Type: application/x-www-form-urlencoded",
            "Token: " . $token_card
        );
        $hd_card = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => implode("\r\n", $header),
                'content' => ''
            )
        ));
        $json_card = file_get_contents('https://banthe24h.vn/v2/PayCards/TelcoPay/GetCards?msg=' . $card, false, $hd_card);
        return $json_card;
    }
}
