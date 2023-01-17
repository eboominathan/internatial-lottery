<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LotteryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('/', function () {
    return view('welcome');
});


Route::controller(LotteryController::class)->group(function () {
    Route::get('lottery/create', 'create')->name('Lottery: Create Lottery');
    Route::get('lottery/results', 'results')->name('Lottery: Result Lottery');
    Route::post('lottery/store', 'store')->name('Lottery: Store Lottery');
});
