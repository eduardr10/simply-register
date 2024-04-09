<?php

use App\Http\Controllers\PersonalInfoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('personal-info.index');
});


Route::resource('personal-info', PersonalInfoController::class);
