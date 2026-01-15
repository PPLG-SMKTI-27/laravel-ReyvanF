<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [ProjectController::class, 'index2']);

Route::get('/projects', [ProjectController::class, 'index']);