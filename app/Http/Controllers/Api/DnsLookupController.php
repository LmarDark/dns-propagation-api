<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DnsLookupRequest;

class DnsLookupController extends Controller
{
    public function lookup_DNS_A(DnsLookupRequest $request)
    {
        $domain = $request->input('domain');

        $result = dns_get_record($domain, DNS_A);

        return empty($result) ? response()->json(['message' => 'No results']) : response()->json($result);
    }

    public function lookup_DNS_MX(DnsLookupRequest $request)
    {
        $domain = $request->input('domain');

        $result = dns_get_record($domain, DNS_MX);

        return empty($result) ? response()->json(['message' => 'No results']) : response()->json($result);
    }

    public function lookup_DNS_CNAME(DnsLookupRequest $request)
    {
        $domain = $request->input('domain');

        $result = dns_get_record($domain, DNS_CNAME);

        return empty($result) ? response()->json(['message' => 'No results']) : response()->json($result);
    }

    public function lookup_DNS_NS(DnsLookupRequest $request)
    {
        $domain = $request->input('domain');

        $result = dns_get_record($domain, DNS_NS);
        
        return empty($result) ? response()->json(['message' => 'No results']) : response()->json($result);
    }

    public function lookup_DNS_TXT(DnsLookupRequest $request)
    {
        $domain = $request->input('domain');

        $result = dns_get_record($domain, DNS_TXT);

        return empty($result) ? response()->json(['message' => 'No results']) : response()->json($result);
    }

    public function lookup_DNS_AAAA(DnsLookupRequest $request)
    {
        $domain = $request->input('domain');

        $result = dns_get_record($domain, DNS_AAAA);

        return empty($result) ? response()->json(['message' => 'No results']) : response()->json($result);
    }
}