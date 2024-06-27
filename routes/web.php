<?php

use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\Frontend\FacebookAuthController;
use App\Http\Controllers\Frontend\GoogleAuthLoginController;
use App\Http\Controllers\Frontend\LandingpageController;
use App\Http\Controllers\Frontend\TwitterAuthLoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes(['verify' => true]);

Route::get('/', [LandingpageController::class,'index'])->name('app_url');
//google login..............................................
Route::match(['get','post'],'/auth/google/redirect',[GoogleAuthLoginController::class,'redirect'])->name('google-auth');
Route::match(['get','post'],'/auth/google/call-back',[GoogleAuthLoginController::class,'callback_google'])->name('google-auth-callback');
//facebook login............................................
Route::controller(FacebookAuthController::class)->group(function(){
	Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
	Route::get('auth/facebook/callback', 'handleFacebookCallback');
});
//twitter login.............................................
Route::controller(TwitterAuthLoginController::class)->group(function(){
	Route::get('auth/twitter', 'redirectToTwitter')->name('auth.twitter');
	Route::get('auth/twitter/callback', 'handleTwitterCallback');

});


  

// Route::middleware(['auth', 'admin'])->group(function () {
	Route::middleware(['auth', 'verified', 'admin'])->group(function () {
	Route::group(['middleware' => ['auth']], function() {
		Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
		Route::resource('roles', RoleController::class);
		Route::resource('users', UserController::class);
		Route::resource('permissions', PermissionController::class);
	});
});