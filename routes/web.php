<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'read'])
->name('task.read');

Route::get('/create', [TaskController::class, 'create'])
->name('task.create');
Route::post('/create', [TaskController::class, 'assistant_create'])
->name('task.assistant_create');

Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/update/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/delete/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

