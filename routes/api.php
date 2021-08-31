<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/mahasiswa/index', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa/create', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/show/{id}', [MahasiswaController::class, 'show']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::post('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);
