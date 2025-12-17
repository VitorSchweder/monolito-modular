<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Billing\Http\Controllers\InvoiceController;

Route::get('/', [InvoiceController::class, 'index']);
