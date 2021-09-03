<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcuController;

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

Route::get('/por/{n1}/{n2}',[CalcuController::class,'PerimeterOfRectangle']);
Route::get('/voc/{n1}/{n2}/{n3}',[CalcuController::class,'VolumeOfCubold']);
Route::get('/sq/{n1}',[CalcuController::class,'AreaOfSquare']);
Route::get('/cl/{n1}/{op}/{n2}',[CalcuController::class,'calcu']);
