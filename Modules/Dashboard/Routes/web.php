<?php
use Illuminate\Support\Facades\Route;
use Dashboard\Http\Controllers\Dashboard;
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

Route::prefix('Dashboard')->group(function() {
    Route::get('/', [Dashboard\DashboardController::class, 'index'])->name(config('config.dashboard.route_name'));
});

    //Route::get('/Dashboard', 'DashboardController@index');

