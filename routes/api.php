<?php

use App\Http\Controllers\Api\DnsLookupController;
use Illuminate\Support\Facades\Route;

Route::post('/lookup', [DnsLookupController::class, 'lookup_DNS_A']);