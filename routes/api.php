<?php

use App\Http\Controllers\FoodRecommendController;
use App\Http\Controllers\PopulationController;
use App\Http\Controllers\ShoppingAreaController;
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


Route::get('/population', [PopulationController::class, 'index']);
Route::get('/food_recommend', [FoodRecommendController::class, 'index']);
Route::post('/food_recommend', [FoodRecommendController::class, 'store']);


Route::get('/shopping', [ShoppingAreaController::class, 'index']);
Route::post('/shopping', [ShoppingAreaController::class, 'store']);