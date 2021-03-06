<?php

use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Users Related
Route::get('authors', 'App\Http\Controllers\Api\UserController@index');
Route::get('authors/{id}', 'App\Http\Controllers\Api\UserController@show');
Route::get('posts/author/{id}', 'App\Http\Controllers\Api\UserController@posts');
Route::get('comments/author/{id}', 'App\Http\Controllers\Api\UserController@comments');


//Post Related
Route::get('categories','App\Http\Controllers\Api\CategoryController@index');
Route::get('posts/categories/{id}','App\Http\Controllers\Api\CategoryController@posts');
Route::get('posts','App\Http\Controllers\Api\PostController@index');
Route::get('posts/{id}','App\Http\Controllers\Api\PostController@show');
Route::get('comments/posts/{id}','App\Http\Controllers\Api\PostController@comments');


Route::post('register','App\Http\Controllers\Api\UserController@store');
Route::post('token','App\Http\Controllers\Api\UserController@getToken');



Route::middleware('auth:api')->group(function(){
    Route::post('update-user/{id}','App\Http\Controllers\Api\UserController@update');
    Route::post('posts','App\Http\Controllers\Api\PostController@store');
    Route::post('posts/{id}','App\Http\Controllers\Api\PostController@update');
    Route::delete('posts/{id}','App\Http\Controllers\Api\PostController@destroy');
    Route::post('comments/posts/{id}','App\Http\Controllers\Api\CommentController@store');

});
