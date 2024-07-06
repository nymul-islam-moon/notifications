<?php

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TagController;
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

Auth::routes();

Route::prefix('/')->group( function () {

    Route::get('/', [FrontendController::class, 'index'])->middleware(['auth'])->name('home');

    Route::controller(ProfileController::class)->prefix('profile')->group( function () {
        Route::get('/', 'index')->name('frontend.profile.index');
        Route::put('/update/{id}', 'update')->name('frontend.profile.update');
    });
});


Route::prefix('faculty')->group( function (){

    Route::controller(FacultyController::class)->group(function () {
        Route::get('/login', 'index')->name('faculty_login');
        Route::post('/login/owner', 'login')->name('faculty.login');
        Route::post('/register/create', 'register_store')->name('faculty.register.create');
        Route::get('/logout', 'logout')->name('faculty.logout');
        Route::get('/register', 'register')->name('faculty.register');
        Route::get('/dashboard', 'dashboard')->name('faculty.dashboard')->middleware('faculty');
    });


    Route::controller(TagController::class)->prefix('/tags')->group( function() {
        Route::get('/', 'index')->name('faculty.tag.index');
    });

    Route::controller(StudentController::class)->prefix('/students')->group( function() {
        Route::get('/', 'index')->name('faculty.student.index');
    });
});
