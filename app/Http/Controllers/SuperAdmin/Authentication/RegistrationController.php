<?php

namespace App\Http\Controllers\SuperAdmin\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index(){
        return view('super_admin.authentication.registration');
    }

}
