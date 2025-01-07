<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;



Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markAsDoneRoute/{id}', [TodoListController::class, 'markAsDone'])->name('markAsDone');

Route::get('/', [TodoListController::class, 'index']);
