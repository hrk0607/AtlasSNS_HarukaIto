<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\FollowsController;

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



require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth'], function(){
    Route::post('top', 'PostsController@index');
    Route::post('profile', 'ProfileController@profile');
    Route::post('search', 'UsersController@index');
    Route::post('follow-list', 'PostsController@index');
    Route::post('follower-list', 'PostsController@index');
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::get('top', [PostsController::class, 'index']);

Route::get('profile', [ProfileController::class, 'profile']);

Route::get('/search', [UsersController::class, 'index'])->name('search');

Route::get('follow-list', [PostsController::class, 'index']);
Route::get('follower-list', [PostsController::class, 'index']);

Route::post('/users/{user}/follow', [FollowsController::class, 'follow'])->name('users.follow');
Route::delete('/users/{user}/unfollow', [FollowsController::class, 'unfollow'])->name('users.unfollow');

Route::get('posts', [PostsController::class, 'index'])->name('posts.index');
Route::post('posts', [PostsController::class, 'store'])->name('posts.store');

Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');

Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');

Route::get('/search', [UsersController::class, 'search'])->name('users.search');
