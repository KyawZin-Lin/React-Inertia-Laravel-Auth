<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['admin.auth'])->name('dashboard');


Route::get('user/dashboard', function () {
    return Inertia::render('UserDashboard');
})->middleware(['auth'])->name('user.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin.auth')->group(function () {
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

    Route::get('users',[UserController::class,'index'])->name('admin.users.index');
    Route::get('users/create',[UserController::class,'create'])->name('admin.users.create');
    Route::post('users/store',[UserController::class,'store'])->name('admin.users.store');

    Route::get('users/{user}',[UserController::class,'edit'])->name('admin.users.edit');
    Route::patch('users/{user}',[UserController::class,'update'])->name('admin.users.update');
    Route::delete('users/{user}',[UserController::class,'delete'])->name('admin.users.delete');




});

require __DIR__.'/auth.php';
