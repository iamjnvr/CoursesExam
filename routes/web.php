<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CourseController;


// Route::get('/', function () {
//     return redirect()->route('courses.index');
// });

// Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
// Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
// Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
// Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
// Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
// Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('courses', CourseController::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return redirect()->route('login');
});

// Authentication routes
Auth::routes();

// Home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Resourceful routes for courses handled by CourseController
Route::resource('courses', CourseController::class)->except(['index']);
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');
