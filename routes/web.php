<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('lang/change', [LocalizationController::class, 'change'])->name('changeLang');
