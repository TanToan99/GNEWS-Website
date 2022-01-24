<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MediaRequest;
use App\Models\Gift;
use App\Models\GiftCategory;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function index(){
        $cate_id = GiftCategory::where('name',GiftCategory::GIFT_WISH)->first()->id;
        $gifts = Gift::where('giftCategory_id',$cate_id)->get();
        $cate_id = GiftCategory::where('name',GiftCategory::GIFT_CARD)->first()->id;
        $cards = Gift::where('giftCategory_id',$cate_id)->get();
        return view('admin.gifts.index',[
            'gifts' => $gifts,
            'cards' => $cards
        ]);
    }

    
    public function create()
    {
        $categories = GiftCategory::all();
        return view('admin.gifts.create',[
            'categories' => $categories
        ]);
    }

    
    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['giftCategory_id'] = $request->category;
        $data['quantity'] = 99999;
        if($request->hasFile('img')){
            $file = $request->file('img');
            $filename = '/storage/gifts/'.md5(time()).'.jpg';
            $file->move(public_path('/storage/gifts/'), $filename);
            $data['value'] = $filename;
        }
    	
    	if($gift = Gift::create($data)){
    		return redirect()->route('admin.gifts.index')->with(['class'=>'success','message'=>'Thêm gift thành công.']);
    	}
        else{
            return redirect()->back()->with(['class'=>'danger','message'=>'Lỗi hệ thống, thử lại sau.']);
        }
    }

}
