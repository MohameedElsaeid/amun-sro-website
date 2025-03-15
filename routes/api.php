<?php


use App\Http\Controllers\Website\PaymentController;


//whsec_715ea025cc7171f7f3118d82c19a8317c3f77e2c8b14cc495683e1f6369cec20
Route::post('webhook', [PaymentController::class, 'webhook']);
