<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/services', [WebController::class, 'services'])->name('services');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');

//services routes
Route::get('/services/search', [WebController::class, 'search'])->name('services.search');
Route::get('/services/{id}', [WebController::class, 'show'])->name('services.show');
Route::post('/services', [WebController::class, 'storeservice'])->name('services.store');

//contact routes
Route::post('/contact', [WebController::class, 'storecontact'])->name('contact.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
