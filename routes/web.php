<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('login', function () {
    return view('login');
})->name('login');


// socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');

Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');


Route::middleware('auth')->group(function(){
    // Checkout routes
    Route::get('checkout/success', [CheckoutController::class, 'success'])
            ->middleware('ensureUserRole:user')
            ->name('checkout.success');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])
            ->middleware('ensureUserRole:user')
            ->name('checkout.create');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])
            ->middleware('ensureUserRole:user')
            ->name('checkout.store');

    // 
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    
    // user dashboard
    Route::prefix('user/dashboard')->namespace('User')
            ->middleware('ensureUserRole:user')
            ->name('user.')->group(function(){
                Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
    });

    // admin dashboard
    Route::prefix('admin/dashboard')->namespace('Admin')
            ->middleware('ensureUserRole:admin')
            ->name('admin.')->group(function(){

        Route::get('/', [AdminDashboard::class, 'index'])
            ->name('dashboard');
    
        // admin checkout
        Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])
            ->name('checkout.update');
    });
});

require __DIR__.'/auth.php';
