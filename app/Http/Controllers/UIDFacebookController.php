<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Curl\Curl;
use Illuminate\Http\Request;

class UIDFacebookController extends Controller
{
    public function index($linkfb)
    {
        set_time_limit(0);
        $curl = new Curl();
        $curl->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36');
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        $curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
        $html = $curl->get("https://mbasic.facebook.com/".$linkfb);
        if (preg_match('/rid\=(\d+)\&/', $html, $info)) {
            $uid = $info[1];
            return response()->json(['uid' => $uid]);
        } else {
            return response()->json(['uid' => NULL]);
        }
    }
}
