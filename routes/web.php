<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('resume',[ResumeController::class, 'resume'])->name('resume');
Route::get('project',[ProjectController::class, 'project'])->name('project');
Route::get('contact',[ContactController::class, 'contact'])->name('contact');