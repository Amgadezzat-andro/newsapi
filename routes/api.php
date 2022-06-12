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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
