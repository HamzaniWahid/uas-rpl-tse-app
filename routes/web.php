<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/register', function () {
//     return view('auth.register');
// });

Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('user-access');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::resource('detail', ServiceController::class);

Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::resource('barang', BarangController::class)->middleware('user-access');

Route::resource('user', UserController::class)->middleware('user-access');

Route::get('cetak', [App\Http\Controllers\ServiceController::class, 'cetak']);