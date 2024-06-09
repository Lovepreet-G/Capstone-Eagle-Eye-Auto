<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Route::get('/admin/car-repairs', function () {
//     return view('admin.carRepairs');
// })->name('admin.carRepairs');

// Route::get('/admin/add-car-repair', function () {
//     return view('admin.addCarRepair');
// })->name('admin.addCarRepair');

// Route::get('/admin/employees', function () {
//     return view('admin.employees');
// })->name('admin.employees');

// Route::get('/admin/add-employee', function () {
//     return view('admin.addEmployee');
// })->name('admin.addEmployee');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
