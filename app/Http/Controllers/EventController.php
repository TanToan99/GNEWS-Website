<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
        $currentDate = date('Y-m-d');
        $currentDate = date('Y-m-d', strtotime($currentDate));   
        $startDate = date('Y-m-d', strtotime("02/01/2022"));
        if ($currentDate > $startDate){   
            return view('event.countdown');
        }else{    
            return view('event.index');
        }
    }
}
