<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $users = User::orderBy('id', 'desc')
    ->get();
    return view('backend.pages.dashboard')->with('users', $users);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function() {
    Route::resource('student', StudentController::class);
    Route::resource('users', UsersController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('staffs', StaffController::class);
    Route::resource('courses', CourseController::class);

    // Route::get('courses/dropDownShow', [CourseController::class, 'dropDownShow']);
 });
