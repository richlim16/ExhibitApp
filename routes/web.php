<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sampleCont;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [sampleCont::class, 'home']);
Route::post('/insertArt', [sampleCont::class, 'insertArt']);
Route::get('/newArt', [sampleCont::class, 'newArt']);
Route::post('/insertArtist', [sampleCont::class, 'insertArtist']);
Route::get('/newArtist', [sampleCont::class, 'newArtist']);
Route::post('/insertExhibit', [sampleCont::class, 'insertExhibit']);
Route::get('/newExhibit', [sampleCont::class, 'newExhibit']);
Route::post('/insertMusic', [sampleCont::class, 'insertMusic']);
Route::get('/newMusic', [sampleCont::class, 'newMusic']);
Route::post('/insertPoetry', [sampleCont::class, 'insertPoetry']);
Route::get('/newPoetry', [sampleCont::class, 'newPoetry']);
Route::post('/insertTransaction', [sampleCont::class, 'insertTransaction']);
Route::get('/newTransaction', [sampleCont::class, 'newTransaction']);

