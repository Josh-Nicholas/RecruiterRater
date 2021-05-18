<?php

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


// Autho Routes
// require __DIR__.'/auth.php';


// Localization
Route::get('lang/{locale}', 'LocalizationController@lang');

Route::get('/', 'AppController@index');
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@store');
Route::resource('/signup', 'Auth\SignupController');
Route::get('/aboutus', 'AppController@aboutus')->name('aboutus');
Route::resource('/contactus', ContactusController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'userDeleteState'], function () {

        Route::get('/logout', 'Auth\LoginController@destroy');
        
        // Profile setting page
        Route::resource('/setting', ProfileSettingController::class);
        Route::delete('/delete/{id}', 'ProfileSettingController@destroy')->name('user.delete');
        Route::post('/user-info', 'ProfileSettingController@UserInformation');
        Route::post('/email-setting', 'ProfileSettingController@EmailSetting');
        
        Route::resource('/leave-review', LeaveReviewController::class);
        Route::resource('/categories', CategoriesController::class);
    });
});


// Recruiter Routes
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('measure')->group(function () {
        Route::resource('/aiq', 'Measure\AiqController');
    });
});


// ================== Addmin Routes =================== //
Route::prefix('admin')->group(function () {
    Route::get('/login', 'AdminController@login')->name('admin.login');
    Route::post('/login', 'AdminController@login')->name('admin.login.post');
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::any('/logout', 'AdminController@logout')->name('admin.logout');
        Route::get('/', 'AdminController@paymentHistory')->name('admin');
        Route::get('/dashboard', 'AdminController@index');
        Route::resource('/contact-users', ContactUsersController::class);
    });
});