<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todolist', [App\Http\Controllers\ToDoListController::class, 'index'])->name('todolist.index');
Route::post('/todolist', [App\Http\Controllers\ToDoListController::class, 'store'])->name('todolist.store');

Route::delete('/todolist/{task}', [App\Http\Controllers\ToDoListController::class, 'destroy'])->name('todolist.destroy');

Route::post('/todolist/{task}', [App\Http\Controllers\ToDoListController::class, 'update'])->name('todolist.update');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact.index');



Route::get('/clear', [App\Http\Controllers\ToDoListController::class, 'clean'])->name('todolist.clean');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
