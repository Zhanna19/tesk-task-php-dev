<?php
/**
 *16.07.2024
 *
 * Zhanna Kolomiiets
 */

use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Route;

Route::post('/send-data', [DeliveryController::class, 'sendDeliveryData']);
