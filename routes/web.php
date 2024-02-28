<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\ApplicationController;

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



// Route::get('csrf', function () {
//     return csrf_token();
// });


// Route::get('/', function(){
//     return view('dashboard');
// });

// Route::get('/admin/dashboard', function(){
//     return view('admin.app'); 
// });

Route::get('/api/services', [ServiceController::class, 'index']);

Route::post('/api/services', [ServiceController::class, 'store']);
Route::put('/api/services/{service}', [ServiceController::class, 'update']);
Route::delete('/api/services/{service}', [ServiceController::class, 'destroy']);


Route::get('/api/projects', [ProjectController::class, 'index']);
Route::post('/api/projects', [ProjectController::class, 'store']);


Route::get('/api/users', [UserController::class, 'index']);
Route::post('/api/users', [UserController::class, 'store']); 
Route::put('/api/users/{user}', [UserController::class, 'update']);
Route::delete('/api/users/{user}', [UserController::class, 'destroy']);

Route::get('{view}', ApplicationController::class)->where('view', '(.*)');
