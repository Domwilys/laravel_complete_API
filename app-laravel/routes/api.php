<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DepoimentApiController;

Route::apiResource('/depoiments', DepoimentApiController::class);
