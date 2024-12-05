<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserDataController;

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



// Route::get('/register',[UserController::class,'create']);
// Route::post('/register',[UserController::class,'store']);
// Route::post('/userdatas', [UserController::class, 'store']);

// Route::get('/userdatas', [UserDataController::class, 'index']);
//Route::post('/userdata', [UserDataController::class, 'store']);