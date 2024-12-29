<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ChangePasswordController;
use App\Http\Controllers\User\ChangeProfileController;
use App\Http\Controllers\User\TwoFactorController;

/*
|--------------------------------------------------------------------------
| Profile auth Channels
|--------------------------------------------------------------------------
 
*/

Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/User/ChangePasswordController.php'))) {
        // Password
        Route::get('password', [App\Http\Controllers\User\ChangePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password', [App\Http\Controllers\User\ChangePasswordController::class, 'update'])->name('password.update');
        // Profile
        Route::get('edit', [App\Http\Controllers\User\ChangeProfileController::class, 'edit'])->name('profile.edit');
        Route::post('profile', [App\Http\Controllers\User\ChangeProfileController::class, 'update'])->name('profile.update');

       
        // Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
    // Two Auth
    Route::get('verify', [TwoFactorController::class, 'index'])->name('verify.index');
    Route::post('verify', [TwoFactorController::class, 'store'])->name('verify.store');
    Route::get('verify/resend', [TwoFactorController::class, 'resend'])->name('verify.resend');
});