<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\MediaLibrary;
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
        Role::firstOrCreate(['name' => Role::ROLE_EDITOR]);
        $role_admin = Role::firstOrCreate(['name' => Role::ROLE_ADMIN]);

        // MediaLibrary
        MediaLibrary::firstOrCreate([]);

        // Users
        $user = User::firstOrCreate(
            ['email' => 'toanlntgcd191338@fpt.edu.vn'],
            [
                'name' => 'Tan Toan',
                'password' => Hash::make('password'),
                'email_verified_at' => now()
            ]
        );

        $user->roles()->sync([$role_admin->id]);
    }
}
