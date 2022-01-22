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
        return view('admin.gifts.index');
    }

    
    public function create()
    {
        return view('admin.gifts.create');
    }

    
    public function store(Request $request)
    {
        $cate_id = GiftCategory::where('name',GiftCategory::GIFT_WISH)->first()->id;
        $data['name'] = $request->name;
        $data['giftCategory_id'] = $cate_id;
        $data['quantity'] = 99999;
        if($request->hasFile('img')){
            $file = $request->file('img');
            $filename = '/images/wishs/'.md5(time()).'.jpg';
            $file->move(public_path('/images/wishs/'), $filename);
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
