<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\BeritaAdminController;
use App\Http\Controllers\admin\AnggotaAdminController;
use App\Http\Controllers\client\HomeClientController;

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
    return view('welcome');
});

//admin
Route::resource('/dashboard',DashboardAdminController::class)->middleware('auth');
Route::resource('/beritaa',BeritaAdminController::class)->middleware('auth');
Route::resource('/anggotaa',AnggotaAdminController::class)->middleware('auth');
Route::get('/anggotaa-edit/{id}',[AnggotaAdminController::class,'edit'])->middleware('auth');
Route::get('/beritaa-edit/{id}',[BeritaAdminController::class,'edit'])->middleware('auth');

//client
Route::resource('/home',HomeClientController::class);

//auth
Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
