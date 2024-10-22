<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/contact-us', [WebsiteController::class, 'contact_store'])->name('contact.store');