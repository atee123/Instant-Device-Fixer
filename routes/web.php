<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
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
    return view('welcome');
})->name('home');

Route::domain(env('domain'))->group(function () {
    Route::group(['prefix' => 'admin', 'middleware' => 'is.admin', 'as' => 'admin.'], function () {
        Route::resource('dashboard', AdminDashboardController::class);
        Route::resource('users', AdminUserController::class);
    });
});
