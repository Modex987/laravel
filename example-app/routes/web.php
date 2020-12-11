<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutUsController;

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

Route::get('/', function () {
    return view('home');
});



Route::get('/company/create', [CompanyController::class, 'create']);
Route::post('/company', [CompanyController::class, 'store']);


Route::get('/contact', [ContactUsController::class, 'create']);
Route::post('/contact', [ContactUsController::class, 'store']);


Route::get('/about', [AboutUsController::class, 'index']);

// Route::get('/employee', [EmployeeController::class, 'index']);
// Route::get('/employee/create', [EmployeeController::class, 'create']);
// Route::post('/employee', [EmployeeController::class, 'store']);
// Route::get('/employee/{employee}', [EmployeeController::class, 'show']);
// Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit']);
// Route::patch('/employee/{employee}', [EmployeeController::class, 'update']);
// Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy']);


Route::resource('employee', EmployeeController::class); # CRUD pattern
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
