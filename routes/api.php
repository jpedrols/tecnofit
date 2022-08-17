<?php

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

<<<<<<< HEAD
Route::middleware(['admin'])->group(function () {
    Route::get('rank_por_movimento/{id}', 'App\Http\Controllers\ApiController@getUsersRankByMovement');
});
=======
Route::get('rank_por_movimento/{id}', 'App\Http\Controllers\ApiController@getUsersRankByMovement');
>>>>>>> 9fb0a365806d887a0d91425fc0eaebf22494aee8
