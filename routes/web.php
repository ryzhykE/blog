<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'as' => 'post' ,
    'uses' =>'PostController@index'
]);

Route::get('/{slug}',[
    'as' => 'post',
    'uses' => 'PostController@show']
    )->where('slug', '[A-Za-z0-9-_]+');

Route::post('/', [
    'uses' => 'CommentsController@store',
    'as' => 'post.create'
]);

//
//Route::get('/{vue?}', function() {
//    return view('welcome');
//})->where('vue', '^(?!.*api).*$[\/\w\.-]*');
