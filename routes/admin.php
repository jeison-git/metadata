<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\PriceController;

use App\Http\Livewire\Admin\ShowContacts;
use App\Http\Controllers\ContactUsController;
use App\Http\Livewire\Admin\AnswerContact;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'destroy'])->names('users');

Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('levels', LevelController::class)->names('levels');

Route::resource('prices', PriceController::class)->names('prices');

//Rutas de datos e informacion de cursos por aprobar

Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::post('courses/{course}/approved', [CourseController::class, 'approved'])->name('courses.approved');

Route::get('courses/{course}/observation', [CourseController::class, 'observation'])->name('courses.observation');

Route::post('courses/{course}/reject', [CourseController::class, 'reject'])->name('courses.reject');

//Rutas del centro de ayuda contactanos
Route::get('contacts', ShowContacts::class)->middleware('can:Ver dashboard')->name('contacts.index');

Route::get('contacts/{contact}/answer', AnswerContact::class)->middleware('can:Ver dashboard')->name('contacts.answer');

Route::get('contacts/{contact}/message', [ContactUsController::class, 'message'])->middleware('can:Ver dashboard')->name('contacts.message');

Route::post('contacts/{contact}/answered', [ContactUsController::class, 'answer'])->middleware('can:Ver dashboard')->name('contacts.answered');
