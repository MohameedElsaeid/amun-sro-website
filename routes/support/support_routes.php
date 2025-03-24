
<?php

use Illuminate\Support\Facades\Route;

// Support & Admin-Support Routes
Route::group(['prefix' => 'support'], function () {
    Route::get('/login', [\App\Http\Controllers\Support\LoginController::class, 'showLoginForm'] )->name('support.login');
    Route::post('/submit-login', [\App\Http\Controllers\Support\LoginController::class, 'showLoginForm'] )->name('support.login.submit');
});
