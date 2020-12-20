<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BankDetailController;
use App\Http\Controllers\BidsController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/register/{ref?}', [RegisteredUserController::class, 'create']);

require __DIR__.'/auth.php';

Route::get('/change-password', function () {
    return view('change-password');
})->middleware(['auth'])->name('change-password');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

Route::get('/history', [HistoryController::class, 'index'])->middleware(['auth'])->name('history');
Route::get('/referrals', [UserController::class, 'referrals'])->middleware(['auth'])->name('referrals');
Route::post('/changepassword', [UserController::class, 'change_password'])->middleware(['auth']);
Route::put('/update-profile', [UserController::class, 'update'])->middleware(['auth']);

Route::group(['middleware' => 'auth'], function() {
    Route::resources([
    'banks'         => BankController::class,
    'bank-details'  => BankDetailController::class,
    'investments'   => InvestmentController::class,
    'bids'          => BidsController::class,
    'bonus'         => BonusController::class,
    'auction'       => AuctionController::class,
]);
});

Route::post('/make-payment', [BidsController::class, 'make_payment'])->middleware(['auth']);
Route::post('/approve', [BidsController::class, 'approve'])->middleware(['auth']);
Route::get('/open-auction', [SettingController::class, 'open_auction']);
Route::get('/close-auction', [SettingController::class, 'close_auction']);


