<?php

namespace App\Http\Controllers;

use App\Models\GiftUser;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
      $this->middleware('auth');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {
      $day1 = GiftUser::whereBetween('created_at', [date('2022-01-29'), date('2022-02-02')])->get();
      $day2 = GiftUser::whereBetween('created_at', [date('2022-02-02'), date('2022-02-03')])->get();
      $day3 = GiftUser::whereBetween('created_at', [date('2022-02-03'), date('2022-02-04')])->get();
      //dd($days1);
      return view('event.history',[
         'day1' => $day1,
         'day2' => $day2,
         'day3' => $day3
      ]);
   }
}
