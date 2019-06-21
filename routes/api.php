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
/*Route::get('/admin', function () {
    //return view('welcome');
    return "apiapiapi";
});*/
Route::get('/admin', 'Auth\UserController@index');//加auth是controller放在auth目录下
/*Route::get('/admin/{name?}', function ($name = 'John') {
    return $name;
})->where('name', '[A-Za-z]+');*/
/*Route::get('admin/{id}/{name}', function ($id, $name) {
    return $id.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);*/
//Route::post('/user', 'Auth\UserController@index');