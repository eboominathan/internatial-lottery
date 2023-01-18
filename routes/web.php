<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LotteryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [CustomAuthController::class, 'welcome'])->name('welcome');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login', [CustomAuthController::class, 'customLogin'])->name('custom login');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('register', [CustomAuthController::class, 'customRegistration'])->name('create register');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::controller(LotteryController::class)->group(function () {
Route::get('lottery/results', 'results')->name('Lottery: Result Lottery');
});

Route::group(['middleware' => 'auth'],function(){
    Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
    Route::controller(LotteryController::class)->group(function () {
        Route::get('lottery/create', 'create')->name('Lottery: Create Lottery');
        Route::post('lottery/store', 'store')->name('Lottery: Store Lottery');
    });
});
