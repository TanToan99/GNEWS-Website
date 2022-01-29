<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $currentDate = date('Y-m-d');
        $currentDate = date('Y-m-d', strtotime($currentDate));
        $startDate = date('Y-m-d', strtotime("02/01/2022"));
        if ($currentDate > $startDate) {
            return view('event.countdown');
        } else {
            $mission = Mission::where('day', date('Y-m-d'))->get();
            //dd($mission);
            $agent = new \Jenssegers\Agent\Agent;
            if (!$agent->isMobile()) {
                return view('event.index', [
                    'missions' => $mission
                ]);
            } else {
                return view('event._event-mobile', [
                    'missions' => $mission
                ]);
            }
        }
    }
}
