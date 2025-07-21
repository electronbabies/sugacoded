<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PublicController::class, 'index'])->name('public.index');
