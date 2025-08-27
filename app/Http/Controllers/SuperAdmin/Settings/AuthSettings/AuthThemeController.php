<?php

namespace App\Http\Controllers\SuperAdmin\Settings\AuthSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthThemeController extends Controller
{
    //
    public function index(){
        return view('super_admin.settings.auth.auth_theme_settings');
    }

}
