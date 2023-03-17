<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;

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

Route::controller(ProductController::class)->group(function()
{
    Route::get('/', 'index');
    Route::post('addProduct', 'store');
    Route::get('descriptionProduct/{id}', 'show');
    Route::get('editProduct/{id}', 'edit');
    Route::put('editProduct/{id}', 'update');
    Route::get('deleteProduct/{id}', 'destroy');
});

Route::controller(ShoppingController::class)->group(function()
{
    Route::get('shoppingCar', 'index')->name('shoppingCar');
    Route::put('shoppingCar', 'store')->name('shoppingCar');
});

Route::controller(RegisterController::class)->group(function()
{
    Route::get('register', 'create')->name('register');
    Route::post('register', 'store')->name('register');
});

Route::controller(SesionController::class)->group(function()
{
    Route::post('sesion', 'store');
    Route::get('logout', 'logout');
});

