<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;



Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::get('/', [TodoListController::class, 'index']);
