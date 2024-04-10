<?php

use App\Http\Controllers\PersonalInfoController;
use App\Services\AuxiliaryService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('personal-info.index');
});


Route::get('personal-info/export-to-excel', [AuxiliaryService::class, 'export_to_excel'])->name('export-to-excel');
Route::resource('personal-info', PersonalInfoController::class);
