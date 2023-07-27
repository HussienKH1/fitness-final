<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Stripe\PaymentController;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('plan', [SubscriptionController::class, 'index'])->name('plan')->middleware('auth.check');
Route::get('/auth/login', [Maincontroller::class, 'login'])->name('auth.login');
Route::get('/auth/register', [Maincontroller::class, 'register'])->name('auth.register');
Route::post('/signup', [SignUpController::class, 'store'])->name('signup.store');
Route::get('checkout', [Maincontroller::class, 'checkout'])->name('checkout');
Route::post('/logout', [AuthController::class ,'logout'])->name('logout');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('payment', [PaymentController::class, 'index'])->name('payments');
Route::post('payment', [PaymentController::class, 'store'])->name('payments.store');
Route::get('contact', [ContactController::class, 'index']) -> name('contact') -> middleware('auth.check', 'check.subscription');
Route::get('article', [Maincontroller::class, 'article']) -> name('article')->middleware('auth.check');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
