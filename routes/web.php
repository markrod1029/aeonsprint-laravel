<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;

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



Route::get('/', function(){
    return view('dashboard');
});

// Route::get('/admin/dashboard', function(){
//     return view('admin.app'); 
// });

Route::get('/api/services', [ServiceController::class, 'index']);

Route::post('/api/services', [ServiceController::class, 'store']);


Route::get('{view}', ApplicationController::class)->where('view', '(.*)');
