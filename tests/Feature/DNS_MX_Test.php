<?php

test('the aplication returns 200 response', function () {
    $response = $this->get('/api/dns/lookup/mx?domain=google.com');

    $response->assertStatus(200)
             ->assertJsonStructure([['host', 'type', 'target']]);
});