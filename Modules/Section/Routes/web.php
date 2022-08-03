<?php
use Illuminate\Support\Facades\Route;
use Section\Http\Controllers\Backend;

Route::group(['prefix'=>'Section'],function () {
    Route::get('/', [Backend\SectionController::class, 'index'])->name('section.index');
    Route::post('store', [Backend\SectionController::class, 'store'])->name('section.store');
});
