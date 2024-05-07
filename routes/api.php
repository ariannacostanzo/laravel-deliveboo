<?php

use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\BraintreeController;
use App\Http\Controllers\OrderController;
use App\Models\Restaurant;
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


//api per i ristoranti

//Route::get('/restaurants', [RestaurantController::class, 'index']);
Route::get('/restaurants/search', [RestaurantController::class, 'search']);
Route::apiResource('/restaurants', RestaurantController::class)->only('index', 'show');

// Nuova route per la ricerca dei ristoranti
Route::get('/restaurants', [RestaurantController::class, 'search']);

//api per i tipi

Route::get('/types', [TypeController::class, 'index']);

Route::post('/getNewOrder', [OrderController::class, 'store']);
Route::get('/token', [BraintreeController::class, 'token']);
Route::post('/get-clientToken', [BraintreeController::class, 'store']);

