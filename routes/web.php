<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'viewForm'])->name('index');
Route::post('/add-student', [StudentController::class, 'addStudent']);