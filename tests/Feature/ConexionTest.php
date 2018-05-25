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
    public function testHomeRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(404);
    }

    public function testNotFound()
    {
        $response = $this->get('/algo');
        $response->assertStatus(403);
    }

    public function testServerTest()
    {
        $response = $this->get('/services/list');
        $response->assertStatus(302);
    }
}
