<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AttendanceController;
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


Route::middleware('auth')->group(function () {
    Route::get('/',[WorkController::class,'showIndex']);
    Route::post('/start-work',[WorkController::class,'stampingStartWork']);
    Route::post('/finish-work',[WorkController::class,'stampingFinishWork']);
    Route::post('/start-rest',[WorkController::class,'stampingStartRest']);
    Route::post('/finish-rest',[WorkController::class,'stampingFinishRest']);
    Route::get('/attendance',[AttendanceController::class,'showAttendance'])->name('attendance.list');
});