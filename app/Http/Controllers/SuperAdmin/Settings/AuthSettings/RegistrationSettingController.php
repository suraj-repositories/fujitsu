<?php

namespace App\Http\Controllers\SuperAdmin\Settings\AuthSettings;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class RegistrationSettingController extends Controller
{
    //
    public function index(){

        $form = Form::with(['fields' => function ($query) {
            $query->orderBy('order');
        }])->where('name', 'registration')->firstOrFail();


        return view('super_admin.settings.auth.registration_settings', compact('form'));
    }

}
