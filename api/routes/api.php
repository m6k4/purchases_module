<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['cors']], function () {

    // AUTHORIZATION
    Route::post('auth/login',                           ['uses'  => 'Authorization@login'])->name('login');
    Route::post('auth/registerUser',                    ['uses'  => 'Authorization@registerUser']);
    Route::get('auth/registerUser/activate',            ['uses'  => 'Authorization@activateUser']);
    Route::get('auth/checkIfUserSessionExist',          ['uses'  => 'Authorization@checkIfUserSessionExist']);
    Route::delete('auth/logout',                        ['uses'  => 'Authorization@logout']);

    // Clients purchases 
    Route::get('/clients/purchases/getList',            ['uses'  => 'Client@getPurchasesList']);

    // Finance 
    Route::get('/finance/getDetails',                   ['uses'  => 'Finance@getDetails']);

     // Chart 
     Route::get('/chart/purchases/getDetails',          ['uses'  => 'Todo@getTodosList']);

});

