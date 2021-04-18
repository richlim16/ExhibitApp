<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\formController;

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
Route::get('/', [MainController::class, 'home']);

Route::post('/insertArt', [formController::class, 'insertArt']);
Route::get('/newArt', [MainController::class, 'artForm']);
Route::post('/updateArtForm', [MainController::class, 'artFormUpdate']);
Route::post('/updateArt', [formController::class, 'updateArt']);

Route::post('/insertArtist', [formController::class, 'insertArtist']);
Route::get('/newArtist', [MainController::class, 'artistForm']);
Route::post('/updateArtistForm', [MainController::class, 'artistFormUpdate']);
Route::post('/updateArtist', [formController::class, 'updateArtist']);

Route::post('/insertExhibit', [formController::class, 'insertExhibit']);
Route::get('/newExhibit', [MainController::class, 'exhibitForm']);
Route::post('/updateExhibitForm', [MainController::class, 'exhibitFormUpdate']);
Route::post('/updateExhibit', [formController::class, 'updateExhibit']);

Route::post('/insertMusic', [formController::class, 'insertMusic']);
Route::get('/newMusic', [MainController::class, 'musicForm']);
Route::post('/updateMusicForm', [MainController::class, 'musicFormUpdate']);
Route::post('/updateMusic', [formController::class, 'updateMusic']);

Route::post('/insertPoetry', [formController::class, 'insertPoetry']);
Route::get('/newPoetry', [MainController::class, 'poetryForm']);
Route::post('/updatePoetryForm', [MainController::class, 'poetryFormUpdate']);
Route::post('/updatePoetry', [formController::class, 'updatePoetry']);

Route::post('/insertTransaction', [formController::class, 'insertTransaction']);
Route::get('/newTransaction', [MainController::class, 'transactionForm']);
Route::post('/updateTransactionForm', [MainController::class, 'transactionFormUpdate']);
Route::post('/updateTransaction', [formController::class, 'updateTransaction']);

Route::post('/insertUser', [formController::class, 'insertUser']);
Route::get('/newUser', [MainController::class, 'userForm']);
Route::post('/updateUserForm', [MainController::class, 'updateUserForm']);
Route::post('/updateUser', [formController::class, 'updateUser']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/artTable', [MainController::class, 'artTable']);
Route::get('/artistTable', [MainController::class, 'artistTable']);
Route::get('/exhibitsTable', [MainController::class, 'exhibitsTable']);
Route::get('/musicTable', [MainController::class, 'musicTable']);
Route::get('/poetriesTable', [MainController::class, 'poetriesTable']);
Route::get('/transactionsTable', [MainController::class, 'transactionsTable']);
Route::get('/usersTable', [MainController::class, 'usersTable']);
