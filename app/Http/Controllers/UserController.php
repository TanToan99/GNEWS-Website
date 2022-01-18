<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Curl\Curl;

class UserController extends Controller
{
    public function index(){
        $user = User::find(auth()->user()->id)->select('name','email','link_fb','uid_fb')->first();
        dd($user);
        return view('user.index',[
            'user' => $user
        ]);
        
    }

    public function add_link_fb(Request $request){
        $link_fb = $request->link_fb;
        try {
            set_time_limit(0);
            $curl = new Curl();
            $curl->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36');
            $curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
            $curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
            $html = $curl->get($link_fb);
            if (preg_match('/rid\=(\d+)\&/', $html, $info)) {
                $uid = $info[1];
                $user = User::find(auth()->user()->id)->first();
                $user->uid_fb = $uid;
                $user->link_fb = $link_fb;
                $user->save();
                return redirect()->back()->withSuccess("URL not valid");
            }else{
                return redirect()->back()->withError("URL not valid");
            }
        } catch (\ErrorException $e) {
            abort(404);
        }
    }
}
