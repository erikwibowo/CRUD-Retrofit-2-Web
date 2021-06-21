<?php

use App\Http\Controllers\Api\LaundryController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('laundry/show', [LaundryController::class, 'show']);
Route::post('laundry/create', [LaundryController::class, 'create']);
Route::delete('laundry/delete/{id}', [LaundryController::class, 'delete']);
Route::post('laundry/update', [LaundryController::class, 'update']);
