<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\SLiderController;
use App\Http\Controllers\UnggulController;
use App\Http\Controllers\BuktitfController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortofolController;
use App\Http\Controllers\TestimonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeskripsiController;

//home
Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/portofolio', [HomeController::class, 'portofolio']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/testimonials', [HomeController::class, 'testimonials']);


//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('sliders', SLiderController::class)->middleware('auth');
Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('testimon', TestimonController::class)->middleware('auth');
Route::resource('buktitf', BuktitfController::class)->middleware('auth');
Route::resource('portofol', PortofolController::class)->middleware('auth');
Route::resource('unggul', UnggulController::class)->middleware('auth');
Route::resource('teams', TeamsController::class)->middleware('auth');
Route::resource('tim', TimController::class)->middleware('auth');


Route::get('contact', [ContactController::class, 'index']); 
Route::put('contact/{id}', [ContactController::class, 'update']);

Route::get('about', [AboutController::class, 'index']);
Route::put('about/{id}', [AboutController::class, 'update']);

Route::get('deskripsi', [DeskripsiController::class, 'index']);
Route::put('deskripsi/{id}', [DeskripsiController::class, 'update']);
