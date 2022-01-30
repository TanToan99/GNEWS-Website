<?php

namespace Database\Seeders;

use App\Models\GiftCategory;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\MediaLibrary;
use App\Models\MissionType;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        /*Role::firstOrCreate(['name' => Role::ROLE_EDITOR]);
        $role_admin = Role::firstOrCreate(['name' => Role::ROLE_ADMIN]);

        // MediaLibrary
        MediaLibrary::firstOrCreate([]);

        // Users
        $user = User::first();

        $user->roles()->sync([$role_admin->id]);

        
        GiftCategory::firstOrCreate(['name' => GiftCategory::GIFT_CARD]);
        GiftCategory::firstOrCreate(['name' => GiftCategory::GIFT_WISH]);*/
        MissionType::firstOrCreate(['name' => MissionType::MISSION_INVITE]);
        MissionType::firstOrCreate(['name' => MissionType::MISSION_LIKE]);
        MissionType::firstOrCreate(['name' => MissionType::MISSION_COMMENT]);
        MissionType::firstOrCreate(['name' => MissionType::MISSION_LINKFB]);
    }
}
