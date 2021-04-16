<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CoursesCurriculum;


Route::redirect('', 'instructor/courses');

Route::resource('courses', CourseController::class)->names('courses');

Route::get('courses/{course}/curriculum', CoursesCurriculum::class)->middleware('can:Actualizar cursos')->name('courses.curriculum');

Route::get('courses/{course}/objectives', [CourseController::class, 'objectives'])->name('courses.objectives');

//Route::get('courses/{course}/specificobjectives', [CourseController::class, 'specificobjectives'])->name('courses.specificobjectives');

Route::get('courses/{course}/goals', [CourseController::class, 'goals'])->name('courses.goals');

Route::post('courses/{course}/status', [CourseController::class, 'status'])->name('courses.status');

Route::get('courses/{course}/observation', [CourseController::class, 'observation'])->name('courses.observation');