<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsletterController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Language Switch Route
Route::get('locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

// Frontend routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact-send');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter-subscribe');
Route::post('contact/messages/store', [ContactController::class, 'store'])->name('contact-message-store');

// Admin routes
Route::prefix('admin')->group(function () {
    // Guest routes - خارج middleware لأنها للضيوف
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin-login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.submit');

    // Protected routes
    Route::middleware('auth:admin')->name('admin-')->group(function () {
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Partners Routes
        Route::prefix('partners')->name('partners-')->group(function () {
            Route::get('index', [PartnerController::class, 'index'])->name('index');
            Route::get('create', [PartnerController::class, 'create'])->name('create');
            Route::post('store', [PartnerController::class, 'store'])->name('store');
            Route::get('edit/{partner}', [PartnerController::class, 'edit'])->name('edit');
            Route::put('update/{partner}', [PartnerController::class, 'update'])->name('update');
            Route::delete('delete/{partner}', [PartnerController::class, 'destroy'])->name('delete');
        });

        // Messages Routes
        Route::prefix('messages')->name('messages-')->group(function () {
            Route::get('index', [MessageController::class, 'index'])->name('index');
            Route::get('create', [MessageController::class, 'create'])->name('create');
            Route::get('edit/{message}', [MessageController::class, 'edit'])->name('edit');
            Route::put('update/{message}', [MessageController::class, 'update'])->name('update');
            Route::delete('delete/{message}', [MessageController::class, 'destroy'])->name('delete');
        });

        // Services Routes
        Route::prefix('services')->name('services-')->group(function () {
            Route::get('index', [ServiceController::class, 'index'])->name('index');
            Route::get('create', [ServiceController::class, 'create'])->name('create');
            Route::post('store', [ServiceController::class, 'store'])->name('store');
            Route::get('edit/{service}', [ServiceController::class, 'edit'])->name('edit');
            Route::put('update/{service}', [ServiceController::class, 'update'])->name('update');
            Route::delete('delete/{service}', [ServiceController::class, 'destroy'])->name('delete');
        });

        // Services Routes
        Route::get('services', [ServiceController::class, 'index'])->name('services');
        Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');

        // Users Routes
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    });
});

require __DIR__ . '/auth.php';
