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

    Route::get('/gift', [\App\Http\Controllers\GiftController::class, 'view'])->name('gift');
    Route::post('/mo-qua', [\App\Http\Controllers\GiftController::class, 'open_gift'])->name('gift.open');

    Route::get('/lucky-number', [\App\Http\Controllers\LuckyNumberController::class, 'view'])->name('lucky');

    Route::get('/account', [ProfileController::class, 'edit'])->name('account');

    Route::get('/account-verify', [ProfileController::class, 'verifyAccountView'])->name('account.verify');
    Route::post('/account-verify', [ProfileController::class, 'verifyAccount'])->name('account.verify.post');

    Route::get('/banking', [ProfileController::class, 'bankingView'])->name('account.banking');
    Route::post('/banking', [ProfileController::class, 'bankUpdate'])->name('account.banking.post');
});

Route::get('/pusher', function() {
    $result = event(new \App\Events\LuckyNumberEvent('Hi there Pusher!'));
    dd($result);
});


require __DIR__.'/auth.php';
