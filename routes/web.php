<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\PrivacyController;
use Spatie\WelcomeNotification\WelcomesNewUsers;
use App\Http\Controllers\Auth\MyWelcomeController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\User\SearchController;
use App\Models\Post;
use App\Models\Article;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::get('/posts', function () {
    return view('posts');
})->name('posts');


Auth::routes();

Route::prefix('admin')->middleware(['auth','role:admin|writer|manager','twofactor'])->group(function () {
    // Admin Home
    Route::get('/home', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
    // Users
    Route::prefix('users')->name('admin.')->group(function () {
        Route::get('/index', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('user.index');
        Route::get('/create', [App\Http\Controllers\Admin\UsersController::class, 'create'])->name('user.create');
        Route::post('', [App\Http\Controllers\Admin\UsersController::class, 'store'])->name('user.store');
        Route::patch('/{id}', [App\Http\Controllers\Admin\UsersController::class, 'update'])->name('user.update');
        
    });

    // Privacy prefix
    Route::prefix('privacy')->name('admin.privacy.')->group(function () {
       Route::get('/index', [PrivacyController::class, 'index'])->name('index');
       Route::get('/create', [PrivacyController::class, 'create'])->name('create');
       Route::post('/', [PrivacyController::class, 'store'])->name('store');
       Route::get('/{privacy}/edit', [PrivacyController::class, 'edit'])->name('edit');
       Route::patch('/{privacy}', [PrivacyController::class, 'update'])->name('update');
    });

    // Terms prefix
    Route::prefix('terms')->name('admin.terms.')->group(function () {
       Route::resource('', TermController::class)->except([
           'destroy'
       ]);
    });

  
});


// Without Auth
Route::get('/terms', function () {
    $oneYearAgo = now()->subYear(); // yeh line add karein

    $olderTerms = DB::table('terms')
    ->select('id', 'terms', 'created_at', 'updated_at')
    ->where('created_at', '<', $oneYearAgo)
    ->latest()
    ->take(1)
    ->get();

    $latestTerms = DB::table('terms')
    ->select('id', 'terms', 'created_at', 'updated_at')
    ->where('created_at', '>=', $oneYearAgo)
    ->latest()
    ->take(10)
    ->get();

    $terms = $latestTerms->merge($olderTerms);

    return view('terms', compact('terms'));
})->name('terms');

// Privacy
 Route::get('/privacy', function () {
    $oneYearAgo = now()->subYear();

    $latestPrivacy = DB::table('terms')
        ->select('id', 'privacy', 'created_at', 'updated_at')
        ->where('created_at', '>=', $oneYearAgo)
        ->latest()
        ->take(10)
        ->get();

    return view('privacy', compact('latestPrivacy'));
})->name('privacy');

Route::group(['middleware' => ['web', WelcomesNewUsers::class,]], function () {
    Route::get('welcome/{user}', [MyWelcomeController::class, 'showWelcomeForm'])->name('welcome');
    Route::post('welcome/{user}', [MyWelcomeController::class, 'savePassword']);
});

// Search
Route::get('/search/result', [App\Http\Controllers\User\SearchController::class, 'show'])
    ->name('search.result');
// Display Article
Route::get('/articles', function () {
    return view('articles.display');
})->name('display-article');

// Show Article 
Route::get('/articles/{article}/show', function (Article $article) {
    return view('articles.show', ['article' => $article]);
})->name('article.show');

// Show Post
Route::get('/posts/{post}/show', function (Post $post) {
    return view('posts.show', ['post' => $post]);
})->name('post.show');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');