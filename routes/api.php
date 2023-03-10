<?php

use App\Http\Controllers\AutfController;
use App\Http\Controllers\DirektorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirmaController;

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

Route::get('firma', [FirmaController::class, 'index']);
Route::get('firma/{firma_id}', [FirmaController::class, 'show']);
Route::get('direktor', [DirektorController::class, 'index']);
Route::get('direktor/{direktor_id}', [DirektorController::class, 'show']);
Route::post('registracija', [AutfController::class, 'registracija']);
Route::post('prijava', [AutfController::class, 'prijava']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('odjava', [AutfController::class, 'odjava']);
    Route::delete('firma/{firma_id}', [FirmaController::class, 'destroy']);
    Route::post('firma', [FirmaController::class, 'store']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
