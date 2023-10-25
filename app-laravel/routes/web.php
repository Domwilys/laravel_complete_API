<?php

use App\Http\Controllers\RenderControllers\RenderController;
use App\Http\Controllers\Admin\{DepoimentsController};
use Illuminate\Support\Facades\Route;
// use App\Enums\SupportStatus;
use App\Http\Controllers\ProfileController;

Route::get('/', function() {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::delete('/supports/{id}', [SupportController::class, 'delete']) -> name('supports.delete');
//     Route::put('/supports/{id}', [SupportController::class, 'update']) -> name('supports.update');
//     Route::get('/supports/{id}/edit', [SupportController::class, 'edit']) -> name('supports.edit');
//     Route::get('/supports', [SupportController::class, 'index']) -> name('supports.index');
//     Route::get('/supports/create', [SupportController::class, 'create']) -> name('supports.create');
//     Route::post('/supports/create', [SupportController::class, 'store']) -> name('supports.store');
//     Route::get('supports/{id}', [SupportController::class, 'show']) -> name('supports.show');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::delete('/depoiments/{id}', [DepoimentsController::class, 'delete']) -> name('depoiments.delete');
    Route::put('/depoiments/{id}', [DepoimentsController::class, 'update']) -> name('depoiments.update');
    Route::get('/depoiments/{id}/edit', [DepoimentsController::class, 'edit']) -> name('depoiments.edit');
    Route::get('/depoiments', [DepoimentsController::class, 'index']) -> name('depoiments.index');
    Route::get('/depoiments/create', [DepoimentsController::class, 'create']) -> name('depoiments.create');
    Route::post('/depoiments/create', [DepoimentsController::class, 'store']) -> name('depoiments.store');
    Route::get('depoiments/{id}', [DepoimentsController::class, 'show']) -> name('depoiments.show');
});

require __DIR__.'/auth.php';
