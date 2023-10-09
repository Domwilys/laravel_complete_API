<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SupportApiController;

Route::apiResource('/supports', SupportApiController::class);
