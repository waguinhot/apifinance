<?php

use App\Http\Controllers\Api\HistoricoController;
use App\Http\Controllers\Api\InvestimentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/investimento/{id}' ,[InvestimentoController::class , 'getInvestimento']);
Route::get('/investimentos' , [InvestimentoController::class , 'index']);
Route::post('/investimento/store', [InvestimentoController::class , 'store']);

Route::get('/historico/{id}', [HistoricoController::class , 'index']);
Route::post('/historico/store/{id}', [HistoricoController::class , 'store']);
