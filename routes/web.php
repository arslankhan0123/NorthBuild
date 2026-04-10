<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/careers', [FrontendController::class, 'careers'])->name('careers');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::group(['prefix' => '/services'], function () {
    Route::get('/', [FrontendController::class, 'services'])->name('services');
    Route::get('/{id}', [FrontendController::class, 'servicesDetails'])->name('services.details');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
