<?php

test('the aplication returns 200 response', function () {
    $response = $this->get('/api/dns/lookup/txt?domain=google.com');

    $response->assertStatus(200)
             ->assertJsonStructure([['host', 'type', 'txt']]);
});

test('the aplication returns 302 response', function () {
    $response = $this->get('/api/dns/lookup/txt?domain=');

    $response->assertStatus(302);
});

test('the aplication returns 500 response', function () {
    $response = $this->get('/api/dns/lookup/txt?domain=*');

    $response->assertStatus(500);
});
