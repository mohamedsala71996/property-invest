<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\PostAdvertiseController;
use App\Http\Controllers\Dashboard\AdvertiseDurationController;
use App\Http\Controllers\Dashboard\PropertyTypeController;
use App\Http\Controllers\Dashboard\VirtualViewingsController;
use App\Http\Controllers\Dashboard\FurnishingController;
use App\Http\Controllers\Dashboard\AmenitiesController;
use App\Http\Controllers\Dashboard\CompletionStatusController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\FloorController;
use App\Http\Controllers\Dashboard\MemberShipController;
use App\Http\Controllers\Dashboard\FooterController; 
use App\Http\Controllers\Dashboard\HomeSettingsController;
Route::middleware(['auth'])->group(function () {
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard.index');

//news
Route::get('/admin/news', [NewsController::class, 'index'])->name('dashboard.news.index');
Route::get('/admin/add-new', [NewsController::class, 'create'])->name('dashboard.news.add');
Route::post('/admin/store-new', [NewsController::class, 'store'])->name('dashboard.news.store');
Route::get('/admin/edit-new/{id}', [NewsController::class, 'edit'])->name('dashboard.news.edit');
Route::put('/admin/update-new/{id}', [NewsController::class, 'update'])->name('dashboard.news.update');
Route::delete('/admin/delete-new/{id}', [NewsController::class, 'destroy'])->name('dashboard.news.destroy');
//posts
Route::get('/admin/posts', [PostAdvertiseController::class, 'index'])->name('dashboard.posts.index');
Route::get('/admin/posts-settings', [PostAdvertiseController::class, 'postSettings'])->name('dashboard.posts.settings');
Route::get('/admin/post/show/{id}', [PostAdvertiseController::class, 'show'])->name('dashboard.posts.show');
Route::delete('/admin/post/delete/{id}', [PostAdvertiseController::class, 'destroy'])->name('dashboard.posts.destroy');

//advertise duration
Route::get('/admin/advertise-duration', [AdvertiseDurationController::class, 'index'])->name('dashboard.advertise.duration.index');
Route::get('/admin/advertise-duration/create', [AdvertiseDurationController::class, 'create'])->name('dashboard.advertise.duration.create');
Route::post('/admin/advertise-duration/store',[AdvertiseDurationController::class, 'store'])->name('dashboard.advertise.duration.store');
Route::get('/admin/advertise-duration/edit/{id}', [AdvertiseDurationController::class, 'edit'])->name('dashboard.advertise.duration.edit');
Route::post('/admin/advertise-duration/update/{id}',[AdvertiseDurationController::class, 'update'])->name('dashboard.advertise.duration.update');
Route::delete('/admin/advertise-duration/destroy/{id}',[AdvertiseDurationController::class, 'destroy'])->name('dashboard.advertise.duration.destroy');
//property types
Route::get('/admin/property-types', [PropertyTypeController::class, 'index'])->name('dashboard.property.types.index');
Route::get('/admin/property-types/create', [PropertyTypeController::class, 'create'])->name('dashboard.property.types.create');
Route::post('/admin/property-types/store',[PropertyTypeController::class, 'store'])->name('dashboard.property.types.store');
Route::get('/admin/property-types/edit/{id}', [PropertyTypeController::class, 'edit'])->name('dashboard.property.types.edit');
Route::post('/admin/property-types/update/{id}',[PropertyTypeController::class, 'update'])->name('dashboard.property.types.update');
Route::delete('/admin/property-types/destroy/{id}',[PropertyTypeController::class, 'destroy'])->name('dashboard.property.types.destroy');

// 
Route::get('/admin/virtual-viewings', [VirtualViewingsController::class, 'index'])->name('dashboard.virtual.viewings.index');
Route::get('/admin/virtual-viewings/create', [VirtualViewingsController::class, 'create'])->name('dashboard.virtual.viewings.create');
Route::post('/admin/virtual-viewings/store',[VirtualViewingsController::class, 'store'])->name('dashboard.virtual.viewings.store');
Route::get('/admin/virtual-viewings/edit/{id}', [VirtualViewingsController::class, 'edit'])->name('dashboard.virtual.viewings.edit');
Route::post('/admin/virtual-viewings/update/{id}',[VirtualViewingsController::class, 'update'])->name('dashboard.virtual.viewings.update');
Route::delete('/admin/virtual-viewings/destroy/{id}',[VirtualViewingsController::class, 'destroy'])->name('dashboard.virtual.viewings.destroy');

//
Route::get('/admin/furnishing-types', [FurnishingController::class, 'index'])->name('dashboard.furnishing.types.index');
Route::get('/admin/furnishing-types/create', [FurnishingController::class, 'create'])->name('dashboard.furnishing.types.create');
Route::post('/admin/furnishing-types/store',[FurnishingController::class, 'store'])->name('dashboard.furnishing.types.store');
Route::get('/admin/furnishing-types/edit/{id}', [FurnishingController::class, 'edit'])->name('dashboard.furnishing.types.edit');
Route::post('/admin/furnishing-types/update/{id}',[FurnishingController::class, 'update'])->name('dashboard.furnishing.types.update');
Route::delete('/admin/furnishing-types/destroy/{id}',[FurnishingController::class, 'destroy'])->name('dashboard.furnishing.types.destroy');

//
Route::get('/admin/amenities', [AmenitiesController::class, 'index'])->name('dashboard.amenities.index');
Route::get('/admin/amenities/create', [AmenitiesController::class, 'create'])->name('dashboard.amenities.create');
Route::post('/admin/amenities/store',[AmenitiesController::class, 'store'])->name('dashboard.amenities.store');
Route::get('/admin/amenities/edit/{id}', [AmenitiesController::class, 'edit'])->name('dashboard.amenities.edit');
Route::post('/admin/amenities/update/{id}',[AmenitiesController::class, 'update'])->name('dashboard.amenities.update');
Route::delete('/admin/amenities/destroy/{id}',[AmenitiesController::class, 'destroy'])->name('dashboard.amenities.destroy');

//
Route::get('/admin/countries', [CountryController::class, 'index'])->name('dashboard.countries.index');
Route::get('/admin/countries/create', [CountryController::class, 'create'])->name('dashboard.countries.create');
Route::post('/admin/countries/store',[CountryController::class, 'store'])->name('dashboard.countries.store');
Route::get('/admin/countries/edit/{id}', [CountryController::class, 'edit'])->name('dashboard.countries.edit');
Route::post('/admin/countries/update/{id}',[CountryController::class, 'update'])->name('dashboard.countries.update');
Route::delete('/admin/countries/destroy/{id}',[CountryController::class, 'destroy'])->name('dashboard.countries.destroy');

//
Route::get('/admin/floors', [FloorController::class, 'index'])->name('dashboard.floors.index');
Route::get('/admin/floors/create', [FloorController::class, 'create'])->name('dashboard.floors.create');
Route::post('/admin/floors/store',[FloorController::class, 'store'])->name('dashboard.floors.store');
Route::get('/admin/floors/edit/{id}', [FloorController::class, 'edit'])->name('dashboard.floors.edit');
Route::post('/admin/floors/update/{id}',[FloorController::class, 'update'])->name('dashboard.floors.update');
Route::delete('/admin/floors/destroy/{id}',[FloorController::class, 'destroy'])->name('dashboard.floors.destroy');

//
Route::get('/admin/completion-status', [CompletionStatusController::class, 'index'])->name('dashboard.completion.status.index');
Route::get('/admin/completion-status/create', [CompletionStatusController::class, 'create'])->name('dashboard.completion.status.create');
Route::post('/admin/completion-status/store',[CompletionStatusController::class, 'store'])->name('dashboard.completion.status.store');
Route::get('/admin/completion-status/edit/{id}', [CompletionStatusController::class, 'edit'])->name('dashboard.completion.status.edit');
Route::post('/admin/completion-status/update/{id}',[CompletionStatusController::class, 'update'])->name('dashboard.completion.status.update');
Route::delete('/admin/completion-status/destroy/{id}',[CompletionStatusController::class, 'destroy'])->name('dashboard.completion.status.destroy');

Route::get('/admin/settings/memberships', [MemberShipController::class, 'index'])->name('dashboard.settings.membership.index');
Route::get('/admin/settings/footer', [FooterController::class, 'index'])->name('dashboard.settings.footer.index');
Route::get('/admin/settings/home', [HomeSettingsController::class, 'index'])->name('dashboard.settings.home.index');
});

require __DIR__.'/auth.php';
