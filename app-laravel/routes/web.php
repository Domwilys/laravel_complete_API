<?php

use App\Http\Controllers\RenderControllers\RenderController;
use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;

Route::get('/', [RenderController::class, 'indexRender']);
Route::get('/supports', [SupportController::class, 'index']) -> name('supports.index');
Route::get('/supports/create', [SupportController::class, 'create']) -> name('supports.create');
Route::post('/supports/create', [SupportController::class, 'store']) -> name('supports.store');