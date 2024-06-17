<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuletinController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ParibanController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/form_buletin', function () {
    return view('user.formulir.buletin');
});
Route::get('/form_pariban', function () {
    return view('user.formulir.pariban');
});

Route::fallback(function () {
    return view('partials.404');
});

Route::get('/error', function () {
    return view('partials.404');
})->name('error');

Route::get('/buletin', [BuletinController::class, 'index'])->name('buletin.index');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/buletin/show/{id}', [BuletinController::class, 'show'])->name('buletin.show');


Route::get('/pariban/category/{id}', [ParibanController::class, 'index'])->name('pariban');
Route::get('/pariban/show/{id}', [ParibanController::class, 'show'])->name('pariban.show');
