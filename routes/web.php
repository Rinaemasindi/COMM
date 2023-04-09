<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('register',[RegisterController::class,'index'])->name('register');
Route::get('/',[HomeController::class,'index'])->name('home');

