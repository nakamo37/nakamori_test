<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', [ContactController::class, 'index']);
Route::get('/', [CategoryController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/', [ContactController::class, 'store']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/admin/search', [ContactController::class, 'search']);
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});
// Route::get('/register', [UserController::class, 'index']);