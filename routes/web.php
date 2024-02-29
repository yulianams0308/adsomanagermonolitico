<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\DatasheetController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;

use App\Models\Competence;
use Illuminate\Support\Facades\Route;



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

    Route::get('login', [LoginController::class, 'index'])->name('login.index');
    Route::get('home', [HomeController::class, 'index'])->name('home.index');
    Route::get('panel', [PanelController::class, 'index'])->name('panel.index');

    Route::get('rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::post('rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('rooms/create', [RoomController::class, 'create']);
    Route::delete('rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');
    Route::get('rooms/{room}', [RoomController::class, 'show'])->name('rooms.show'); //Adrian
    

    Route::get('competences', [CompetenceController::class, 'index'])->name('competences.index');
    Route::post('competences', [CompetenceController::class, 'store'])->name('competences.store');
    Route::get('competences/create', [CompetenceController::class, 'create']);
    Route::delete('competences/{competence}', [CompetenceController::class, 'destroy'])->name('competences.destroy');
    Route::get('competences/{competence}', [CompetenceController::class, 'show'])->name('competences.show'); //Adrian

    Route::get('datasheets', [DatasheetController::class, 'index'])->name('datasheets.index');
    Route::post('datasheets', [DatasheetController::class, 'store'])->name('datasheets.store');
    Route::get('datasheets/create', [DatasheetController::class, 'create'])->name('datasheets.create');
    Route::delete('datasheets/{datasheet}', [DatasheetController::class, 'destroy'])->name('datasheets.destroy');
    Route::get('datasheets/{datasheet}', [DatasheetController::class, 'show'])->name('datasheets.show'); 
    Route::get('datasheets/{datasheet}/edit', [DatasheetController::class, 'edit'])->name('datasheets.edit');
    Route::put('datasheets/{datasheet}', [DatasheetController::class, 'update'])->name('datasheets.update');//yu



    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
    // Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
    Route::get('roles/{role}', [RoleController::class, 'show'])->name('roles.show'); 
    Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('roles/{role}', [RoleController::class, 'update'])->name('roles.update');//yu


    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/create', [UserController::class, 'create']);
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show'); 

    Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentices.index');
    Route::post('apprentices', [ApprenticeController::class, 'store'])->name('apprentices.store');
    Route::get('apprentices/create', [ApprenticeController::class, 'create']);
    Route::delete('apprentices/{apprentice}', [ApprenticeController::class, 'destroy'])->name('apprentices.destroy');
    Route::get('apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentices.show'); 

    Route::get('instructors', [InstructorController::class, 'index'])->name('instructors.index');
    Route::post('instructors', [InstructorController::class, 'store'])->name('instructors.store');
    Route::get('instructors/create', [InstructorController::class, 'create']);
    Route::delete('instructors/{instructor}', [InstructorController::class, 'destroy'])->name('instructors.destroy');
    Route::get('instructors/{instructor}', [InstructorController::class, 'show'])->name('instructors.show'); //Adrian

    Route::get('sessions', [SessionController::class, 'index'])->name('sessions.index');
    Route::post('sessions', [SessionController::class, 'store'])->name('sessions.store');
    Route::get('sessions/create', [SessionController::class, 'create']);
    Route::delete('sessions/{session}', [SessionController::class, 'destroy'])->name('sessions.destroy');
    Route::get('sessions/{session}', [SessionController::class, 'show'])->name('sessions.show'); //Adrian


    Route::get('attendances', [AttendanceController::class, 'index'])->name('attendances.index');
    Route::post('attendances', [AttendanceController::class, 'store'])->name('attendances.store');
    Route::get('attendances/create', [AttendanceController::class, 'create']);
    Route::delete('attendances/{attendance}', [AttendanceController::class, 'destroy'])->name('attendances.destroy');
    Route::get('attendances/{attendance}', [AttendanceController::class, 'show'])->name('attendances.show'); //Adrian

    Route::get('results', [ResultController::class, 'index'])->name('results.index');
    Route::post('results', [ResultController::class, 'store'])->name('results.store');
    Route::get('results/create', [ResultController::class, 'create']);
    Route::delete('results/{result}', [ResultController::class, 'destroy'])->name('results.destroy');
    Route::get('results/{result}', [ResultController::class, 'show'])->name('results.show'); 


    // Route::resource('apprendice', ApprenticeController::class);
    // Route::resource('attendance', AttendanceController::class);
    // Route::resource('competence', CompetenceController::class);
    // Route::resource('datasheet', DatasheetController::class);
    // Route::resource('image', ImageController::class);
    // Route::resource('instructor', InstructorController::class);
    // Route::resource('resultado', ResultController::class);
    // Route::resource('role', RoleController::class);
    // Route::resource('room', RoomController::class);
    // Route::resource('Session', SessionController::class);



