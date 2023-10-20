<?php

use App\Http\Controllers\RenderControllers\RenderController;
use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;
use App\Enums\SupportStatus;
use App\Http\Controllers\ProfileController;

Route::get('/', function() {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::delete('/supports/{id}', [SupportController::class, 'delete']) -> name('supports.delete');
    Route::put('/supports/{id}', [SupportController::class, 'update']) -> name('supports.update');
    Route::get('/supports/{id}/edit', [SupportController::class, 'edit']) -> name('supports.edit');
    Route::get('/supports', [SupportController::class, 'index']) -> name('supports.index');
    Route::get('/supports/create', [SupportController::class, 'create']) -> name('supports.create');
    Route::post('/supports/create', [SupportController::class, 'store']) -> name('supports.store');
    Route::get('supports/{id}', [SupportController::class, 'show']) -> name('supports.show');
});

require __DIR__.'/auth.php';
