<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Curl\Curl;

class UserController extends Controller
{
    public function index(){
        $user = \Auth::user();
        $student_id = "None";
        if(preg_match('/^\w+@fpt\.edu\.vn$/i', $user->email) > 0)
        {
            if (preg_match('/[a-z]{3}(\d+)/', $user->email, $info)) {
                $student_id = strtoupper($info[0]);
            }
        }
        return view('user.index',[
            'user' => $user,
            'student_id' => $student_id
        ]);
        
    }

    public function add_link_fb(Request $request){
        $link_fb = $request->link_fb;
        $user = \Auth::user();
        if($user->link_fb != NULL){
            return abort(404);
        }
        $arr = [
            'www.facebook.com' => 'mbasic.facebook.com',
            'm.facebook.com' => 'mbasic.facebook.com',
            'facebook.com' => 'mbasic.facebook.com',
        ];
        $link_fb = strtr($link_fb,$arr);
        try {
            set_time_limit(0);
            $curl = new Curl();
            $curl->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36');
            $curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
            $curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
            $html = $curl->get($link_fb);
		dd($html);
            if (preg_match('/rid\=(\d+)\&/', $html, $info)) {
                $uid = $info[1];
                if(User::where('uid_fb',$uid)){
                    return redirect()->back()->with(['class' => 'danger', 'message' => "Facebook account has link to other person!"]);
                }
                $user->uid_fb = $uid;
                $user->link_fb = $request->link_fb;
                $user->save();
                return redirect()->back()->with(['class' => 'success', 'message' => "Link Facebook account success"]);
            }else{
                return redirect()->back()->with(['class' => 'danger', 'message' => "URL not valid!"]);
            }
        } catch (\ErrorException $e) {
            abort(404);
        }
    }
}
