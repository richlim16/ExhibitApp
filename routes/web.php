<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\PoetryController;
use App\Http\Controllers\ExhibitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MusicController;

use App\Models\exhibit;
use App\Models\art;
use App\Models\poetry;
use App\Models\User;

Auth::routes();

Route::group(['middleware' => ['auth', 'isUser']], function(){
    Route::get('/home', function(){
        $exhibits = exhibit::all();
        return view('tables/galleryTable', ['exhibits' => $exhibits]);
    })->name('home');
});

Route::resource('art', ArtController::class);
Route::post('/art/addToExhibit/{id}', [ArtController::class, 'addToExhibit']);
Route::resource('poetry', PoetryController::class);
Route::post('/poetry/addToExhibit/{id}', [PoetryController::class, 'addToExhibit']);
Route::resource('exhibit', ExhibitController::class);
Route::resource('user', UserController::class);
Route::get('/user/changeAdmin/{id}', [UserController::class, 'changeAdmin']);
Route::get('/user/changeBan/{id}', [UserController::class, 'changeBan']);
Route::get('/exhibit/changeStatus/{id}', [ExhibitController::class, 'changeStatus']);
Route::resource('music', MusicController::class);
Route::post('/music/addToExhibit/{id}', [MusicController::class, 'addToExhibit']);

Route::resource('user', UserController::class);

Route::get('/', function () {
    
    // if(Auth::check()){
    //     return redirect()->route('art.index');
    // }
    
    // else{$exhibit = exhibit::all();
        $exhibits = exhibit::all();
        return view('tables.gallery.exhibits', ['exhibits' => $exhibits]);

        // return redirect('/login');
    // }

});

Route::get('/exhibit-{id}', function ($id){

    $exhibit = exhibit::find($id);
    $exhibits = exhibit::all();
    $art = art::where('exhibit_id', $id)->get();
    $poetry = poetry::where('exhibit_id', $id)->get();
    $user = User::all();
    return view('tables.gallery.exhibit', ['exhibit' => $exhibit, 'exhibits' => $exhibits, 'art' => $art, 'poetry' => $poetry, 'user' => $user]);
});