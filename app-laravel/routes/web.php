<?php

use App\Http\Controllers\RenderControllers\RenderController;
use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;

Route::delete('/supports/{id}', [SupportController::class, 'delete']) -> name('supports.delete');
Route::put('/supports/{id}', [SupportController::class, 'update']) -> name('supports.update');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit']) -> name('supports.edit');
Route::get('/', [RenderController::class, 'indexRender']);
Route::get('/supports', [SupportController::class, 'index']) -> name('supports.index');
Route::get('/supports/create', [SupportController::class, 'create']) -> name('supports.create');
Route::post('/supports/create', [SupportController::class, 'store']) -> name('supports.store');
Route::get('supports/{id}', [SupportController::class, 'show']) -> name('supports.show');