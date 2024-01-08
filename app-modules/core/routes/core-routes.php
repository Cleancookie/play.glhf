<?php

use Modules\Core\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms.index')->middleware('web');
// Route::get('/cores/create', [CoreController::class, 'create'])->name('cores.create');
// Route::post('/cores', [CoreController::class, 'store'])->name('cores.store');
// Route::get('/cores/{core}', [CoreController::class, 'show'])->name('cores.show');
// Route::get('/cores/{core}/edit', [CoreController::class, 'edit'])->name('cores.edit');
// Route::put('/cores/{core}', [CoreController::class, 'update'])->name('cores.update');
// Route::delete('/cores/{core}', [CoreController::class, 'destroy'])->name('cores.destroy');
