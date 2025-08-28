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
                ['title' => $theme['title']],
                $theme
            );
        }

    }
}
