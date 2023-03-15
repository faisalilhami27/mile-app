<?php

use App\Http\Controllers\PackageController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'package'], function () {
    Route::get('/all', [PackageController::class, 'getAll']);
    Route::get('/{id}', [PackageController::class, 'getById']);
    Route::post('/', [PackageController::class, 'store']);
    Route::put('/{id}', [PackageController::class, 'update']);
    Route::patch('/{id}', [PackageController::class, 'updateSomeField']);
    Route::delete('/{id}', [PackageController::class, 'destroy']);
});
