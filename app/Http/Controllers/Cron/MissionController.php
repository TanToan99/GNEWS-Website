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
    public function index()
    {
        //LINK FB
        $missionType = MissionType::where('name', MissionType::MISSION_LINKFB)->first();
        $mission = Mission::where([['mission_id', $missionType->id], ['day', date('Y-m-d')]])->first();
        if ($mission) {
            $users = User::where('link_fb', '!=', NULL)->get();
            foreach ($users as $user) {
                if (!MissionUser::where([['mission_id', $mission->id], ['user_id', $user->id]])->first()) {
                    $user->times = $user->times + $mission->times;
                    $user->save();
                    MissionUser::Create(['mission_id' => $mission->id, 'user_id' => $user->id]);
                }
            }
        }
        //INVITE
        $missionType = MissionType::where('name', MissionType::MISSION_INVITE)->first();
        $mission = Mission::where([['mission_id', $missionType->id], ['day', date('Y-m-d')]])->first();
        if ($mission) {
            $users = User::where('invite_count', '>=', $mission->require)->get();
            foreach ($users as $user) {
                if (!MissionUser::where([['mission_id', $mission->id], ['user_id', $user->id]])->first()) {
                    $user->times = $user->times + $mission->times;
                    $user->save();
                    MissionUser::Create(['mission_id' => $mission->id, 'user_id' => $user->id]);
                }
            }
        }
        //LIKE
        $missionType = MissionType::where('name', MissionType::MISSION_LIKE)->first();
        $mission = Mission::where([['mission_id', $missionType->id], ['day', date('Y-m-d')]])->first();
        if ($mission) {
            $context = stream_context_create(array(
                'http' => array(
                    'method' => 'GET',
                    'header' => 'Content-Type: application/x-www-form-urlencoded'
                )
            ));
            $uids_like = file_get_contents('https://graph.facebook.com/' . ENV('FB_POST_ID') . '/likes?fields=id&access_token=' . ENV('ACCESS_TOKEN'), false, $context);
            $json_uids_like = json_decode($uids_like)->data;
			dd($json_uids_like);
            foreach ($json_uids_like as $json_uid_like) {
                $user = User::where('uid_fb', $json_uid_like->id)->first();
                if (!$user) continue;
                if (!MissionUser::where([['mission_id', $mission->id], ['user_id', $user->id]])->first()) {
                    $user->times = $user->times + $mission->times;
                    $user->save();
                    MissionUser::Create(['mission_id' => $mission->id, 'user_id' => $user->id]);
                }
            }
        }
        //COMMENT

        $missionType = MissionType::where('name', MissionType::MISSION_COMMENT)->first();
        $mission = Mission::where([['mission_id', $missionType->id], ['day', date('Y-m-d')]])->first();
        if ($mission) {
            $users = User::all();
            foreach ($users as $user) {
                if (!$user) continue;
                if (!MissionUser::where([['mission_id', $mission->id], ['user_id', $user->id]])->first()) {
                    $user->times = $user->times + $mission->times;
                    $user->save();
                    MissionUser::Create(['mission_id' => $mission->id, 'user_id' => $user->id]);
                }
            }
        }
        return true;
    }
}
