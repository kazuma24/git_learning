<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\Sample2Controller;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('sample')->group(function (){
    Route::post('test1', [SampleController::class, 'test1']);
    Route::post('test2/{hoge}', [SampleController::class, 'test2']);
    Route::post('test3', [SampleController::class, 'test3']);    
});

Route::namespace('Sample2Controller')->group(function (){
    Route::post('test4', [Sample2Controller::class, 'test4']);
    Route::post('test5', [Sample2Controller::class, 'test5']);
    Route::post('test6', [Sample2Controller::class, 'test6']);
    Route::post('test7', [Sample2Controller::class, 'test7']); 
    Route::post('test8', [Sample2Controller::class, 'test8']);
    Route::post('test9', [Sample2Controller::class, 'test9']);      
});
