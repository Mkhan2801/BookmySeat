<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'Index']);
Route::post('/login', [UserController::class, 'Login']);
Route::post('/singUp', [UserController::class, 'SingUp']);
Route::post('/logOut', [UserController::class, 'Logout']);

Route::get('/home', [BookingController::class, 'Home']);
Route::post('/seat/{user}', [BookingController::class, 'Seat']);
Route::post('/room/{user}', [BookingController::class, 'Room']);
Route::put('/seat/{user}/update', [BookingController::class, 'SeatUpdate']);
Route::put('/room/{user}/update', [BookingController::class, 'RoomUpdate']);

