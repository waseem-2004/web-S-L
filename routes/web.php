<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TableController;

Route::get('/dataTable', [App\Http\Controllers\TableController::class, 'index'])->name('dataTable.index');
Route::resource('dataTable', App\Http\Controllers\TableController::class);

use App\Http\Controllers\TableController;

//Route::resource('tables', TableController::class);

Route::resource('dataTable', TableController::class); 


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
