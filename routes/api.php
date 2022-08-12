<?php

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

Route::get('rank_por_movimento/{id}', 'App\Http\Controllers\ApiController@getUsersRankByMovement');
// Route::get('movimento/{id}', 'App\Http\Controllers\ApiController@getMovementById');