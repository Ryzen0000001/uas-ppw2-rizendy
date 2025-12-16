<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::prefix('/pekerjaan')->group(function () {
    Route::get('/', [App\Http\Controllers\PekerjaanController::class, 'index'])->name('pekerjaan.index');
    Route::get('/add', [App\Http\Controllers\PekerjaanController::class, 'add'])->name('pekerjaan.add');
    Route::post('insert', [App\Http\Controllers\PekerjaanController::class, 'store'])->name('pekerjaan.store');
    Route::get('edit/{id}', [App\Http\Controllers\PekerjaanController::class, 'edit'])->name('pekerjaan.edit');
    Route::put('update', [App\Http\Controllers\PekerjaanController::class, 'update'])->name('pekerjaan.update');
    Route::delete('delete', [App\Http\Controllers\PekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');
});
