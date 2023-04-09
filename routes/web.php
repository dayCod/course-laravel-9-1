<?php

use App\Http\Controllers\Admin\About\AboutController;
use App\Http\Controllers\Admin\ChangePassword\ChangePasswordController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\HomeSlide\HomeSlideController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Frontend\LandingPageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LandingPageController::class, 'index']); //end route

Route::group([
    'prefix' => '/admin',
    'middleware' => ['auth', 'verified'],
], function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    }); //end route

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile');
        Route::get('/profile/{user}/edit', 'edit')->name('profile.edit');
        Route::put('/profile/{user}', 'update')->name('profile.update');
    }); //end route

    Route::controller(ChangePasswordController::class)->group(function() {
        Route::get('/change-password', 'index')->name('change-password');
        Route::post('/change-password/update', 'update')->name('change-password.update');
    }); //end route

    Route::controller(HomeSlideController::class)->group(function() {
        Route::get('home-slide', 'show')->name('home-slide.show');
        Route::put('home-slider/{id}/update', 'updateHomeSlider')->name('home-slider.update');
    }); //end route

    Route::controller(AboutController::class)->group(function() {
        Route::get('about', 'show')->name('about.show');
        Route::put('about/{id}/update', 'updateAbout')->name('about.update');
    }); //end route

});

require __DIR__ . '/auth.php';
