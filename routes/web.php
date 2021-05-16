<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\PoetryController;


Auth::routes();

Route::group(['middleware' => ['auth', 'isUser']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::resource('art', ArtController::class);
Route::resource('poetry', PoetryController::class);
Route::get('/', function () {
    
    if(Auth::check()){
        return redirect()->route('art.index');
    }
    
    else{
        return redirect('/login');
    }

});

