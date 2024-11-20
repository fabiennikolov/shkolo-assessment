<?php

use App\Http\Controllers\ButtonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ButtonController::class, 'showDashboard'])->name('dashboard');
Route::get('button/{id}/edit', [ButtonController::class, 'editButton'])->name('edit-button');
Route::put('button/{id}', [ButtonController::class, 'updateButton'])->name('update-button');
Route::delete('button/{id}', [ButtonController::class, 'deleteButton'])->name('delete-button');