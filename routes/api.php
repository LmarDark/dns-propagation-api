<?php

use App\Http\Controllers\Api\DnsLookupController;
use Illuminate\Support\Facades\Route;

Route::prefix('/dns/lookup/')->controller(DnsLookupController::class)->group(function () {
    Route::get('/a', 'lookup_DNS_A');
    Route::get('/mx', 'lookup_DNS_MX');
    Route::get('/cname', 'lookup_DNS_CNAME');
    Route::get('/ns', 'lookup_DNS_NS');
    Route::get('/txt', 'lookup_DNS_TXT');
    Route::get('/aaaa', 'lookup_DNS_AAAA');
    Route::get('/all', 'lookup_DNS_ANY');
});