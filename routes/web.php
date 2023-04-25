<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\AuthorController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\TagController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [HomeController::class, 'blog'])->name('blog');

Route::post('/contact', [ContactController::class, 'store_and_send_contact_mail'])->middleware('throttle:3,1')->name('postContact');
Route::delete('/contact/{id}', [ContactController::class, 'delete'])->name('contact.delete');





Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::controller()->name('dashboard.')->prefix('/dashboard')->middleware(['auth'])->group(function () {
    Route::resource('blog', BlogController::class);
    Route::resource('author', AuthorController::class);
    Route::resource('tag', TagController::class);
    Route::resource('project', ProjectController::class);

    Route::get('forget-cache-home-view', [DashboardController::class, 'forget_cache_home_view'])->name('forget_cache_home_view');
    Route::get('forget-all-caches', [DashboardController::class, 'forget_all_caches'])->name('forget_all_caches');

});




require __DIR__.'/auth.php';
