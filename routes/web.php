<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
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


Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Profile Routing
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('/contact', [ProfileController::class, 'contactUpdate'])->name('profile.contact.update');
    });


    // Project Routing
    Route::prefix('project')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('project.index');
        Route::get('/create', [ProjectController::class, 'create'])->name('project.create');
        Route::post('/create', [ProjectController::class, 'store'])->name('project.store');
        Route::get('/{id}', [ProjectController::class, 'show'])->name('project.show');
        Route::get('/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
        Route::post('/{id}/edit', [ProjectController::class, 'update'])->name('project.update');
        Route::delete('/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    });
})->middleware('auth');



// Homepage Routing
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/partners', [HomeController::class, 'partners'])->name('partners');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/publications', [HomeController::class, 'publications'])->name('publications');
Route::get('/business', [HomeController::class, 'business'])->name('business');
Route::get('/business/{id}', [HomeController::class, 'businessDetail'])->name('business.detail');

Auth::routes();

// Route::get('profile',)
