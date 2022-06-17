<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SettingController;

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

Route::get('/', [IndexController::class, 'index']);

Auth::routes();

// dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Team
Route::get('/team', [TeamController::class, 'index'])->name('team');

// Slider
Route::get('/slider', [SliderController::class, 'index'])->name('slider');
Route::get('/slider/edit/{id}', [SliderController::class, 'edit']);
Route::post('/slider/simpan/{id}', [SliderController::class, 'simpan']);

// turnamen
Route::get('/tournament', [EventController::class, 'index'])->name('tournament');
Route::get('/tournament/tambah', [EventController::class, 'tambah']);
Route::post('/tournament/simpan', [EventController::class, 'simpan']);
Route::get('/tournament/hapus/{id}', [EventController::class, 'hapus']);
Route::get('/tournament/update/{id}', [EventController::class, 'update']);
Route::post('/tournament/edit/{id}', [EventController::class, 'edit']);

// Countdown
Route::get('/count', [CountController::class, 'index'])->name('count');
Route::get('/count/edit/{id}', [CountController::class, 'edit']);
Route::post('/count/simpan/{id}', [CountController::class, 'simpan']);

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/tambah', [BlogController::class, 'tambah']);
Route::post('/blog/simpan', [BlogController::class, 'simpan']);
Route::get('/blog/hapus/{id}', [BlogController::class, 'hapus']);
Route::get('/blog/update/{id}', [BlogController::class, 'update']);
Route::post('/blog/edit/{id}', [BlogController::class, 'edit']);


// sponsor
Route::get('/sponsor', [SponsorController::class, 'index'])->name('sponsor');
Route::get('/sponsor/tambah', [SponsorController::class, 'tambah']);
Route::post('/sponsor/simpan', [SponsorController::class, 'simpan']);
Route::get('/sponsor/hapus/{id}', [SponsorController::class, 'hapus']);
Route::get('/sponsor/update/{id}', [SponsorController::class, 'update']);
Route::post('/sponsor/edit/{id}', [SponsorController::class, 'edit']);

//setting
Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::get('/setting/edit/{id}', [SettingController::class, 'edit']);
Route::post('/setting/update/{id}', [SettingController::class, 'update']);