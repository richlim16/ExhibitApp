<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;


Auth::routes();

Route::group(['middleware' => ['auth', 'isUser']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::resource('art', ArtController::class);
Route::get('/', function () {return redirect()->route('art.index');});

