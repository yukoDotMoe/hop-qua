<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/balance', [ProfileController::class, 'userBalance'])->name('account.balance');
    Route::get('/gift', [\App\Http\Controllers\GiftController::class, 'view'])->name('gift');
    Route::post('/mo-qua', [\App\Http\Controllers\GiftController::class, 'open_gift'])->name('gift.open');

    Route::get('/lucky-number', [\App\Http\Controllers\LuckyNumberController::class, 'view'])->name('lucky');
    Route::post('/lucky-number/send', [\App\Http\Controllers\LuckyNumberController::class, 'doBet'])->name('lucky.bet');

    Route::get('/account', [ProfileController::class, 'edit'])->name('account');

    Route::get('/news', [\App\Http\Controllers\NewsController::class, 'homeView'])->name('news');
    Route::get('/news/{id}', [\App\Http\Controllers\NewsController::class, 'viewPost'])->name('news.view');
    Route::post('/news/react/{id}', [\App\Http\Controllers\NewsController::class, 'react'])->name('news.react');
    Route::post('/react/buy', [\App\Http\Controllers\NewsController::class, 'buyReact'])->name('news.buyReact');

    Route::get('/account-verify', [ProfileController::class, 'verifyAccountView'])->name('account.verify');
    Route::post('/account-verify', [ProfileController::class, 'verifyAccount'])->name('account.verify.post');

    Route::get('/banking', [ProfileController::class, 'bankingView'])->name('account.banking');
    Route::post('/banking', [ProfileController::class, 'bankUpdate'])->name('account.banking.post');

    Route::get('/profile', [ProfileController::class, 'editProfileView'])->name('account.profile');
    Route::post('/profile', [ProfileController::class, 'editProfile'])->name('account.profile.post');


    Route::get('/history-play/{tables}', [ProfileController::class, 'historyPlay'])->name('account.history_play');

});

Route::controller(\App\Http\Controllers\AdminController::class)->group(function () {
    Route::get('/admincp', 'loginView')->name('admin.login');
    Route::post('/admincp/let_met_in', 'login')->name('admin.login.submit');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('/admin/settings', 'settingsView')->name('admin.settings');
        Route::post('/admin/settings', 'saveSettings')->name('admin.settings.post');
        Route::get('/admin/lucky_game', 'luckyGameView')->name('admin.lucky_game');
        Route::post('/admin/lucky_game', 'luckyUpdate')->name('admin.lucky_game.post');
        Route::get('/admin/bai_viet', 'postview')->name('admin.bai_viet');
        Route::post('/admin/bai_viet', 'createPost')->name('admin.bai_viet.post');

        Route::get('admin/logout', 'logout')->name('admin.logout');
    });
});

require __DIR__.'/auth.php';
