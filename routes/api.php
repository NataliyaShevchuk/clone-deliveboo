<?php

use App\Http\Controllers\api\DishController as ApiDishController;
use App\Http\Controllers\api\RestaurantController as ApiRestaurantController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\RestaurantController;
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

Route::get("/restaurants", [ApiRestaurantController::class, "index"]);

// sarà raggiungibile tramite /api/posts/4
Route::get("/restaurants/{restaurant}", [ApiRestaurantController::class, "show"]);