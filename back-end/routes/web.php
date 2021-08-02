<?php

use App\Http\Controllers\Auth\Register;
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

Route::get('auth:sanctum', fn () => response()->json(['message' => 'Hello from the back-end!']));

Route::middleware('guest:sanctum')->post('/register', Register::class)->name('register');
