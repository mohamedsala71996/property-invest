<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Website\SiteController;
use App\Http\Controllers\Website\NewsController;
use App\Http\Controllers\Website\PostAdvertiseController;

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
Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
Route::get('/', [SiteController::class, 'index'])->name('website.index');
Route::get('/news', [NewsController::class, 'index'])->name('website.news.index');
Route::get('/post-advertise/create', [PostAdvertiseController::class, 'create'])->name('website.postadvertise.create');
Route::get('/new-launches', [SiteController::class, 'newLaunches'])->name('website.new.launches');
Route::get('/post-advertise/details/{id}', [SiteController::class, 'advertiseDetails'])->name('website.postadvertise.details');
Route::get('/post-advertise/search', [SiteController::class, 'getPostedAdvertises'])->name('website.posted.advertises');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
