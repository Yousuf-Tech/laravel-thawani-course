<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "home"]);
Route::get('/resume', [PagesController::class, "resume"]);
Route::get('/projects', [PagesController::class, "projects"]);
Route::get('/contact', [PagesController::class, "contact"]);
Route::get('/terms', [PagesController::class, "terms"]);
Route::get('/privacy', [PagesController::class, "privacy"]);

