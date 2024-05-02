<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ApiController;
use App\Http\controllers\AuthRoleController;


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


/* 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 */
Route::middleware('auth:api')->get('/check', [AuthRoleController::class, 'Accesso']);

Route::middleware('auth:api')->get('/role', [AuthRoleController::class, 'getClientData']);
Route::get('/boh', [AuthRoleController::class, 'index']);


Route::middleware('auth:api')->get('/user', function () {
    // Questa rotta richiede l'autenticazione API
    $user = Auth::user();
    return response()->json($user);
});