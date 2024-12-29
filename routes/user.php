<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Settings\SettingController;
use App\Http\Controllers\BanController;
use App\Http\Controllers\Auth\UpdateEmailController;

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
 
*/

Route::group(['prefix' => 'user', 'middleware' => ['auth','twofactor']], function () {
    // User Home
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');
    // Settings
    Route::get('setting', [App\Http\Controllers\Settings\SettingController::class, 'index'])->name('user.setting.index');

    // Feature Create
    Route::get('/suggest/feature', function () {
            return view('user.feature-suggestion.create');
    })->name('user.feature.suggest');

    // List
    Route::get('/suggest/feature/list', function () {
        return view('user.feature-suggestion.index');
    })->name('user.suggestion-list');

    // History
    Route::get('/history', function () {
        $usersHistory = DB::table('notifications')->get();
        return view('history',compact('usersHistory'));
    })->name('history');

    Route::prefix('report')->name('admin.reports.')->group(function () {
        Route::get('/index', [BanController::class, 'index'])->name('index');
        Route::post('/', [BanController::class, 'store'])->name('store');
    });

    // Update Email
    Route::prefix('email-update')->name('user.email-update.')->group(function () {
        Route::get('/index', [UpdateEmailController::class, 'index'])->name('index');
        Route::post('/', [UpdateEmailController::class, 'store'])->name('store');

    })->middleware('password.confirm');
});
