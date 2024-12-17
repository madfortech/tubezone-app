<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\Settings\SettingController;
use App\Http\Controllers\Admin\User\ChangePasswordController;
use App\Http\Controllers\Admin\User\ChangeProfileController;
use App\Livewire\Posts\CreatePost;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth','role:admin']], function () {
    // Admin Home
    Route::get('admin/home', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
    // Users
    Route::prefix('users')->name('admin.')->group(function () {
        Route::get('admin/users/index', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('user.index');
        Route::get('admin/users/create', [App\Http\Controllers\Admin\UsersController::class, 'create'])->name('user.create');
        Route::post('', [App\Http\Controllers\Admin\UsersController::class, 'store'])->name('user.store');
        Route::get('admin/users/{id}/edit', [App\Http\Controllers\Admin\UsersController::class, 'edit'])->name('user.edit');
        Route::patch('admin/users/{id}', [App\Http\Controllers\Admin\UsersController::class, 'update'])->name('user.update');

    });
});

Route::group(['middleware' => ['auth']], function () {
    // User Home
    Route::get('user/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');
    // Settings
    Route::get('user/setting', [App\Http\Controllers\Settings\SettingController::class, 'index'])->name('user.setting.index');

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
    });

    Route::get('/posts/create', CreatePost::class)->name('user.posts.create');
 
   
});

