<?php

use App\Http\Controllers\Api\DnsLookupController;
use Illuminate\Support\Facades\Route;

Route::prefix('/dns/lookup/')->controller(DnsLookupController::class)->group(function () {
    Route::post('/a', 'lookup_DNS_A');
    Route::post('/mx', 'lookup_DNS_MX');
    Route::post('/cname', 'lookup_DNS_CNAME');
    Route::post('/ns', 'lookup_DNS_NS');
    Route::post('/txt', 'lookup_DNS_TXT');
    Route::post('/aaaa', 'lookup_DNS_AAAA');
});