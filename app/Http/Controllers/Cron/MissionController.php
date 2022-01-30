<?php

namespace App\Http\Controllers\Cron;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\MissionType;
use App\Models\MissionUser;
use App\Models\User;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index(){
        //LINK FB
        $missionType = MissionType::where('name',MissionType::MISSION_LINKFB)->first();
        $mission = Mission::where([['mission_id',$missionType->id],['day',date('Y-m-d')]])->first();
        $users = User::where('link_fb','!=',NULL)->get();
        foreach($users as $user){
            if(!MissionUser::where([['mission_id',$mission->id],['user_id',$user->id]])->first()){
                $user->times = $user->times + $mission->times;
                $user->save();
                MissionUser::Create(['mission_id' => $mission->id,'user_id'=> $user->id]);
            }
        }
        //INVITE
        $missionType = MissionType::where('name',MissionType::MISSION_INVITE)->first();
        $mission = Mission::where([['mission_id',$missionType->id],['day',date('Y-m-d')]])->first();
        $users = User::where('invite_count','>=',$mission->require)->get();
        foreach($users as $user){
            if(!MissionUser::where([['mission_id',$mission->id],['user_id',$user->id]])->first()){
                $user->times = $user->times + $mission->times;
                $user->save();
                MissionUser::Create(['mission_id' => $mission->id,'user_id'=> $user->id]);
            }
        }
        return true;
    }
}
