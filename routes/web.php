<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [FrontendController::class, 'blogDetail'])->name('blog.detail');
Route::get('/portofolio/{id}', [FrontendController::class, 'portofolioDetail'])->name('portofolio.detail');


Route::get('/dashboard', function () {
    return view('frontend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [FrontendController::class, 'editProfile'])->name('profile.edit');
    Route::patch('/profile', [FrontendController::class, 'updateProfile'])->name('profile.update');
    Route::delete('/profile', [FrontendController::class, 'destroyProfile'])->name('profile.destroy');
});

// Otentikasi
require __DIR__.'/auth.php';
