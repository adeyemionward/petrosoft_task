<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::get('/visitors/create', [App\Http\Controllers\VisitorController::class, 'create'])->name('visitors.create');
Route::post('/visitors/create', [App\Http\Controllers\VisitorController::class, 'store']);
Route::get('/visitors/edit/{id}', [App\Http\Controllers\VisitorController::class, 'edit']);
Route::put('/visitors/edit/{id}', [App\Http\Controllers\VisitorController::class, 'update']);


Route::get('/staff/', [App\Http\Controllers\StaffController::class, 'index'])->name('staff.index');
Route::get('/staff/create', [App\Http\Controllers\StaffController::class, 'create'])->name('staff.create');
Route::post('/staff/create', [App\Http\Controllers\StaffController::class, 'store']);
 
