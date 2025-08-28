<?php

namespace Database\Seeders;

use App\Models\AuthTheme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = config('initial_data.login_themes');

        foreach ($data as $theme) {
            AuthTheme::updateOrCreate(
                ['title' => $theme['title'], 'type' => $theme['type']],
                $theme
            );
        }

        $rdata = config('initial_data.register_themes');

        foreach ($rdata as $theme) {
            AuthTheme::updateOrCreate(
                ['title' => $theme['title'], 'type' => $theme['type']],
                $theme
            );
        }

        $fdata = config('initial_data.forgot_password_themes');

        foreach ($fdata as $theme) {
            AuthTheme::updateOrCreate(
                ['title' => $theme['title'], 'type' => $theme['type']],
                $theme
            );
        }

    }
}
