<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

Route::get('/', function () {
    return redirect()->route('music.index');
});

Route::resource('music', MusicController::class);