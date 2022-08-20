<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\AuthController;
use App\Http\Controllers\Landing\CompanyController;
use App\Http\Controllers\Landing\HelpController;
use App\Http\Controllers\Landing\AboutController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login.v1');
Route::get('/login/v2', [AuthController::class, 'login_v2'])->name('login.v2');
Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/help', [HelpController::class, 'index'])->name('help.index');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us.index');
