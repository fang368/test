<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;


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


Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


// Главная страница
Route::get('/', [EventController::class, 'index'])->name('home');

// Все мероприятия
Route::get('/events', [EventController::class, 'all'])->name('events.index'); 

// Страница одного мероприятия
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

// Все новости
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Страница одной новости
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// админ панель

Route::middleware(['auth'])->group(function () {
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Для мероприятий
Route::delete('/admin/event/{id}', [AdminController::class, 'deleteEvent'])->name('admin.deleteEvent');


// Для новостей
Route::get('/admin/news/{id}/edit', [AdminController::class, 'editNews'])->name('admin.editNews');
Route::put('/admin/news/{id}', [AdminController::class, 'updateNews'])->name('admin.updateNews');
Route::delete('/admin/news/{id}', [AdminController::class, 'deleteNews'])->name('admin.deleteNews');
Route::get('/admin/news/create', [AdminController::class, 'createNews'])->name('admin.createNews');
Route::post('/admin/news', [AdminController::class, 'storeNews'])->name('admin.storeNews');

});