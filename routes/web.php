<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user/{id}', [UserController::class, 'show'])->where('id', '[0-9]+');
