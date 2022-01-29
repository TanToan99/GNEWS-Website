<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\GiftCategory;
use App\Models\GiftUser;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function random(Request $request){
        $user = \Auth::user();
        $timeStart = date('H:i:s',strtotime("6 PM"));
        $timeEnd = date('H:i:s',strtotime("9 PM"));
        if(!(date('H:i:s') > $timeStart && date('H:i:s') < $timeEnd)){
            return response()->json(['error' => 1, 'message' => 'Chưa đến thời gian hái lộc 20-21h!']);
        }
        if($user->times > 0){
            $user->times = $user->times - 1;
            $user->save();
            $gift = Gift::where('quantity','>','0')->inRandomOrder()->first();
            if(!$gift){
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
}
