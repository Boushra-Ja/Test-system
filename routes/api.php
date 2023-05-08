<?php

use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


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



Route::post('seand', [App\Http\Controllers\SendEmail2Controller::class, 'basic_email']);
Route::get('make_code', [App\Http\Controllers\SendEmail2Controller::class, 'make_code']);
Route::post('register', [App\Http\Controllers\SendEmail2Controller::class, 'register']);
Route::post('login', [App\Http\Controllers\SendEmail2Controller::class, 'login']);

