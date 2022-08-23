<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

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

// login
Route::get('/', [AuthController::class, 'index'])->name('signin');
Route::post('/', [AuthController::class, 'sign_in'])->name('signin.process');

// dashboard
Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

// contract
Route::get('contract', [ContractController::class, 'index'])->name('contract');
Route::get('contract/add', [ContractController::class, 'create'])->name('addContract');
Route::get('contract/edit', [ContractController::class, 'updated'])->name('updatedContract');
Route::get('contract/search', [ContractController::class, 'search'])->name('searchContract');

// report 
Route::get('report', [ReportController::class, 'index'])->name('report');
Route::get('report/search', [ReportController::class, 'search'])->name('searchReport');

// order
Route::get('order', [OrderController::class, 'index'])->name('order');
Route::get('order/search', [OrderController::class, 'search'])->name('searchOrder');


// admin
Route::get('admin/', function () {
	return view('admin/dashboard-admin');
})->name('adminDashboard');

Route::get('admin/home', function () {
	return view('admin/home/home-admin');
})->name('adminHome');

Route::get('admin/usermanagement', function () {
	return view('admin/usermanagement/usermanagement-admin');
})->name('adminUsermanagement');

Route::get('admin/userauthorization', function () {
	return view('admin/userauthorization/userauthorization-admin');
})->name('adminUserauthorization');