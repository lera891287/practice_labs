<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\GroupController::class, 'per'])->name('group.ratingvelc');



Route::get('/marks',[\App\Http\Controllers\StudentController::class,'StudentList'])->name('list');
Route::get('/create_marks/', [\App\Http\Controllers\StudentController::class, 'createPage'])->name('pages.create');
Route::post('/creteGrad/', [\App\Http\Controllers\StudentController::class, 'createGrad'])->name('student.grand.create');
Route::get('/groupRating/iden', [\App\Http\Controllers\GroupController::class, 'groupRating'])->name('group.rating');
Route::get('/groupRating', [\App\Http\Controllers\GroupController::class, 'per'])->name('group.ratingvelc');
Route::get('/all_group',[\App\Http\Controllers\Controller::class,'groupAll'])->name('list_group');
Route::get('/create_group',[\App\Http\Controllers\Controller::class,'createPage'])->name('create.groups');
Route::post('/creteGroup/', [\App\Http\Controllers\Controller::class, 'createGroup'])->name('groups.create');
Route::delete('/all_group/{group_id}', [\App\Http\Controllers\Controller::class, 'deleteGroup'])->name('group.destroy');

Route::get('/all_students',[\App\Http\Controllers\StudentController::class,'index'])->name('all_students');
Route::get('/create_student',[\App\Http\Controllers\StudentController::class,'createPageTwo'])->name('create_students');
Route::post('/creteStudent/', [\App\Http\Controllers\StudentController::class, 'createStudent'])->name('student.create');
Route::delete('/all_students/{student_id}', [\App\Http\Controllers\StudentController::class, 'deleteStudent'])->name('student.destroy');

Route::get('/all_enducations',[\App\Http\Controllers\EnducationsController::class,'index'])->name('all_enducations');
Route::get('/create_enducations',[\App\Http\Controllers\EnducationsController::class,'createPage'])->name('create_enducations');
Route::post('/createEnducations/', [\App\Http\Controllers\EnducationsController::class, 'createEnducations'])->name('enducations.create');
Route::delete('/all_enducations/{enducation_id}', [\App\Http\Controllers\EnducationsController::class, 'deleteEnducation'])->name('enducations.destroy');

Route::get('/editGroup/{group_id}', [\App\Http\Controllers\GroupController::class, 'editGroup'])->name('group.edit');
Route::put('/editGroup/{group_id}', [\App\Http\Controllers\GroupController::class, 'updateGroup'])->name('group.update');

Route::get('/editStudent/{student_id}', [\App\Http\Controllers\StudentController::class, 'editStudent'])->name('student.edit');
Route::put('/editStudent/{student_id}', [\App\Http\Controllers\StudentController::class, 'updateStudent'])->name('student.update');

Route::get('/editEnducations/{enducation_id}', [\App\Http\Controllers\EnducationsController::class, 'editEnducation'])->name('enducation.edit');
Route::put('/editEnducations/{enducation_id}', [\App\Http\Controllers\EnducationsController::class, 'updateEnducation'])->name('enducation.update');

