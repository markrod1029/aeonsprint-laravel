<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\BusinessController;
use App\Http\Controllers\admin\AppointmentController;
use App\Http\Controllers\admin\DashboardStatController;
use App\Http\Controllers\admin\AppointmentStatusController;

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





// Client Controller

Route::middleware('auth')->group(function () {



    // Profile COntroller
    Route::get('/api/profile', [ProfileController::class, 'index']);
    Route::put('/api/profile', [ProfileController::class, 'update']);
    Route::post('/api/upload-profile-image', [ProfileController::class, 'uploadImages']);
    Route::post('/api/change-user-password', [ProfileController::class, 'changePassword']);

    
// Setting Controller 
Route::get('/api/settings', [SettingController::class, 'index']);
Route::post('/api/settings', [SettingController::class, 'update']);

// dashboard Status Controller 
Route::get('/api/stats/appointments', [DashboardStatController::class, 'appointments']);
Route::get('/api/stats/users', [DashboardStatController::class, 'users']);

    
//    Client Controller
Route::get('/api/clients', [ClientController::class, 'index']);

// appointment Controller
Route::get('/api/appointments', [AppointmentController::class, 'index']);
Route::post('/api/appointments/create', [AppointmentController::class, 'store']);
Route::get('/api/appointments/{appointment}/edit', [AppointmentController::class, 'edit']);
Route::put('/api/appointments/{appointment}/edit', [AppointmentController::class, 'update']);
Route::delete('/api/appointments/{appointment}', [AppointmentController::class, 'destroy']);



// Route::get('/api/stats/appointments', [AppointmentStatusController::class]);

// AppointmentStatus Controller 
Route::get('/api/appointments-status', [AppointmentStatusController::class, 'getStatusWithCount']);



// Service Controller
Route::get('/api/services', [ServiceController::class, 'index']);
Route::post('/api/services', [ServiceController::class, 'store']);
Route::put('/api/services/{service}', [ServiceController::class, 'update']);
Route::delete('/api/services/{service}', [ServiceController::class, 'destroy']);
Route::get('/api/services/search', [ServiceController::class, 'search']);

// Project Controller
Route::get('/api/projects', [ProjectController::class, 'index']);
Route::post('/api/projects', [ProjectController::class, 'store']);


// User Controller 
Route::get('/api/users', [UserController::class, 'index']);
Route::post('/api/users', [UserController::class, 'store']); 
Route::put('/api/users/{user}', [UserController::class, 'update']);
Route::delete('/api/users/{user}', [UserController::class, 'destroy']);
// Route::get('/api/users/search', [UserController::class, 'search']);
Route::delete('/api/users', [UserController::class, 'bulkDelete']);


Route::patch('/api/users/{user}/change-role', [UserController::class, 'changeRole']);
 

});


// contact Controller not finish
Route::post('/contact', ContactController::class)->name('contact');

    // Business COntroller
Route::post('/api/business-card', [BusinessController::class, 'store']);

Route::get('{view}', ApplicationController::class)->where('view', '(.*)');

