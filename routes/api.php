<?php

use App\Http\Controllers\TestResultController;
use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Logging\TestDox\TestResultCollector;

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




Route::post('send', [App\Http\Controllers\SendEmail2Controller::class, 'basic_email']);
Route::get('make_code', [App\Http\Controllers\SendEmail2Controller::class, 'make_code']);
Route::post('verification', [App\Http\Controllers\CodeController::class, 'verification']);
Route::post('login', [App\Http\Controllers\CodeController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('stor_child', [App\Http\Controllers\ChildController::class,'stor']);
    Route::get('show_child', [App\Http\Controllers\ChildController::class,'show']);

    Route::post('first_box', [App\Http\Controllers\BoxController::class,'index']);
    Route::post('continue_box', [App\Http\Controllers\BoxController::class,'store_index']);
    Route::get('show_dimantion', [App\Http\Controllers\PortageDiminssionController::class,'index']);

    Route::get('sub_title', [App\Http\Controllers\SubTitleController::class,'index']);
    Route::post('first_box_list', [App\Http\Controllers\OtherBoxController::class,'first_box_list']);
    Route::post('store_list', [App\Http\Controllers\OtherBoxController::class,'stor']);
    Route::post('plan', [App\Http\Controllers\OtherBoxController::class,'plan']);






});
Route::get('report/{id}' , [TestResultController::class , 'report']) ;

