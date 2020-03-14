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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/country','Country\CountryController@Country');
Route::get('/country/{id}','Country\CountryController@CountryById');
Route::post('/country-save','Country\CountryController@CountrySave');
Route::put('/country/{country}','Country\CountryController@CountryUpdate');
Route::delete('/country/{id}','Country\CountryController@CountryDelete');
// Api controller

Route::post('/user','ApiController@user');
//Route::post('/tokenVerifey','ApiController@tokenVerifey');