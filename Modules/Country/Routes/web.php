<?php
use Illuminate\Support\Facades\Route;
use Country\Http\Controllers\Backend;
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
Route::prefix('Country')->group(function() {
    Route::get('/', [Backend\CountryController::class, 'index'])->name('country.index');
    Route::post('update/{id}', [Backend\CountryController::class, 'update'])->name('country.update');
});
