<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\insriptionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', function () {
    return view('inscription');
});
Route::post('/inscription', 'inscriptionController@inscription')->name('inscription');

Route::get('/login', 'LoginController@page_connexion');

Route::post('/login_store', 'LoginController@login_store')->name('login.store');

Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/accueil', 'AccueilController@dashboard');

