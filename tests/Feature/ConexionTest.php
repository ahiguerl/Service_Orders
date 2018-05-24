<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConexionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testServerTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
