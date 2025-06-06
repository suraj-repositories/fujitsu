<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('super_admin.dashboard');
});
