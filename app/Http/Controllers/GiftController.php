<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function random(Request $request){
        return response()->json(['error' => 0, 'img' => 'https://scontent.fdad3-4.fna.fbcdn.net/v/t1.15752-9/271656282_668517844287851_5529151578864252820_n.png?_nc_cat=104&ccb=1-5&_nc_sid=ae9488&_nc_ohc=fRTDMhB2EqAAX9Fmvd3&_nc_ht=scontent.fdad3-4.fna&oh=03_AVJaCfFXeaQoGvg3O2_DQByjWTylmpA05z-z7JNVmzIOfQ&oe=620FD71E']);
        //return response()->json(['error' => 1, 'message' => 'Basdas']);
    }
}
