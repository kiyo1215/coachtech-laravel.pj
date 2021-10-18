<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Middleware\FirstMiddleware;

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post'])->middleware(FirstMiddleware::class);
