<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\squaredController;
use App\Http\Controllers\cubeController;
use App\Http\Controllers\area_circleController;

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

Route::middleware(['middleware' => 'api'])->group(function () {
    // 処理
   Route::get('/squared',[squaredController::class,'index']);
   Route::get('/cube',[cubeController::class,'index']);
   Route::get('/area_circle',[area_circleController::class,'index']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
