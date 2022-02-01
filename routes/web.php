<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

    $users = User::all();
    return view('backend.pages.dashboard')->with('users', $users);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/user-profile', [RouteController::class, 'index'])->name('profile');
// Route::get('/add-teacher', [RouteController::class, 'addTeacher'])->name('add-teacher');

Route::resource('student', StudentController::class);

Route::get('status/{id}', StudentController::class, 'status');
// Route::post('/add-teacher', [TeacherController::class, 'create'])->name('add-teacher');