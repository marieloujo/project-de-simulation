<?php

use Illuminate\Support\Facades\Route;

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





//Route::group(['middleware' => 'auth'], function() {

    Route::group(['prefix' => 'app'], function() {

        Route::get('dashboard', 'DashboardController@accueil')->name("admin_accueil");

        Route::get('tracteurs', 'DashboardController@allTractor')->name("admin_allTractor");
        Route::get('add-tracteur', 'DashboardController@addTractor')->name("admin_addTractor");

    });

//});





Auth::routes();
