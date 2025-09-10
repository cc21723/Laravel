<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//students
Route::resource('students', StudentController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/students', function () {
//     return view('student.index');
// });




