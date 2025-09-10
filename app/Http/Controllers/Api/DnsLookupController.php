<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DnsLookupRequest;

class DnsLookupController extends Controller
{
    public function lookup_DNS_A(DnsLookupRequest $request)
    {
        $domain     = $request->input('domain');
        # $dns_server = $request->input('dnsserver') ?? '8.8.8.8';

        $result = dns_get_record($domain, DNS_A);

        return empty($result) ? response()->json(['message' => 'No results']) : response()->json($result);
    }
}