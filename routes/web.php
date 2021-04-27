<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::view('about', 'about')->name('about');

Route::view('privacy', 'privacy')->name('privacy');

Route::view('termms', 'termms')->name('termms');

Route::get('contact', [ContactUSController::class, 'index'])->name('contact.index');

Route::post('contact', [ContactUSController::class, 'store'])->name('contact.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
