<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controller\ContactController;

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/store',[ContactController::class,'store'])->name('contact.store');
