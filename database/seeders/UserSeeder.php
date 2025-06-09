<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $superAdmin = User::firstOrCreate([
            'userid' => 'SUPER001',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $superAdmin->assignRole('super_admin');

        $admin = User::firstOrCreate([
            'userid' => 'ADMIN001',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $admin->assignRole('admin');

        $user = User::firstOrCreate([
            'userid' => 'USER001',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user->assignRole('user');

        UserProfile::firstOrCreate(
            ['user_id' => $user->id],
            [
                'name_prefix'     => 'Mr',
                'first_name'      => 'User',
                'middle_name'     => '',
                'last_name'       => 'G',
                'dob'             => '1990-01-01',
                'gender'          => 'male',
                'profile_picture' => 'profiles/default.jpg',
                'created_at'      => now(),
                'updated_at'      => now(),
            ]
        );
        UserProfile::firstOrCreate(
            ['user_id' => $admin->id],
            [
                'name_prefix'     => 'Mr',
                'first_name'      => 'I',
                'middle_name'     => 'Am',
                'last_name'       => 'Admin',
                'dob'             => '1990-01-01',
                'gender'          => 'male',
                'profile_picture' => 'profiles/default.jpg',
                'created_at'      => now(),
                'updated_at'      => now(),
            ]
        );
        UserProfile::firstOrCreate(
            ['user_id' => $superAdmin->id],
            [
                'name_prefix'     => 'Mr',
                'first_name'      => 'Super',
                'middle_name'     => 'Admin',
                'last_name'       => '',
                'dob'             => '1990-01-01',
                'gender'          => 'male',
                'profile_picture' => 'profiles/default.jpg',
                'created_at'      => now(),
                'updated_at'      => now(),
            ]
        );
    }
}
