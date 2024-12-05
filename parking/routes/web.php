<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/parking', [ParkingController::class, 'index']);
Route::get('/signup', [UserDataController::class, 'index']);
// Route::get('/register',[UserDataController::class,'getall']);
Route::post('/register',[UserDataController::class,'store']);
Route::get('/userdatas', [UserDataController::class, 'index']);
Route::get('/login', [UserDataController::class, 'login']);
Route::post('/user_login', [UserDataController::class, 'getall']);
Route::get('/logout', [UserDataController::class, 'logout']);


// admindashbord routes 
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']); 
    Route::get('/user', [AdminController::class, 'All_user']); 
    Route::get('/admin/user/{id}', [AdminController::class, 'delete'])->name('admin.user.delete');
    // Route::get('/user/edit/{id}', [AdminController::class, 'edit'])->name('admin.user.edit');
    Route::put('/admin/user/edit',[AdminController::class,'edit']);
});

