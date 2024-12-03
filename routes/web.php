<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ServiceController;

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/service', [WebController::class, 'service'])->name('service');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');

Route::get('/design', [WebController::class, 'designService'])->name('design');
Route::get('/development',[WebController::class, 'developmentService'])->name('development');
Route::get('/marketing',[WebController::class, 'marketingService'])->name('marketing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/services/{id}', [WebController::class, 'show'])->name('services.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::name('projects.')->prefix('projects')->group(function() {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
        Route::get('create', [ProjectController::class, 'create'])->name('create');
        Route::post('store', [ProjectController::class, 'store'])->name('store');
        Route::get('edit/{id}', [ProjectController::class, 'edit'])->name('edit');
        Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [ProjectController::class, 'destroy'])->name('destroy');
        
    });

    Route::name('services.')->prefix('services')->group(function() {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('create', [ServiceController::class, 'create'])->name('create');
        Route::post('store', [ServiceController::class, 'store'])->name('store');
        Route::get('edit/{id}', [ServiceController::class, 'edit'])->name('edit');
        Route::post('update', [ServiceController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [ServiceController::class, 'destroy'])->name('destroy');
    });

});

require __DIR__.'/auth.php';
