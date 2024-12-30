<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentGateWayController;

Route::get('/',[PaymentGateWayController::class,'index']);
Route::post('razorpay-payment',[PaymentGateWayController::class,'store'])->name('razorpay.payment.store');