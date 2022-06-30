<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Livewire\Dropdown;
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
    $title = 'Dashboard';
    $users = User::orderBy('id', 'desc')
    ->get();
    $count_student = User::where('reg_type', 'student')->get();
    return view('backend.pages.dashboard')->with(['users'=> $users, 'count_student'=>$count_student, 'title'=>$title]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function() {
    Route::resource('student', StudentController::class);
    Route::resource('users', UsersController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('staffs', StaffController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('schedule', ScheduleController::class);
    Route::resource('room', RoomController::class);
    Route::get('1-1schedule', [RouteController::class, 'schedule1_1'])->name('1-1schedule');
    Route::get('1-2schedule', [RouteController::class, 'schedule1_2'])->name('1-2schedule');
 });

Route::get('livewire/dropdown', [Dropdown::class, 'render']);
Route::get('livewire/edit-dropdown', [Dropdown::class, 'edit']);
//  Route::post('dropdown/fetch', [DropdownController::class, 'fetch']);