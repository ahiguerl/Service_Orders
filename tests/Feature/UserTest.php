<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{

  /**
  * A basic test example.
  *
  * @return void
  */
  use DatabaseTransactions; // Evita que el nuevo registro

  public function testUserLogin() {

    $user = factory(User::class)->create();
    $response = $this->post('/login', [
      'email' => $user->email,
      'password' => 'secret',
    ]);

    $this->assertAuthenticated();

  }

  public function testWhoIsLoggedIn() {

    $user = factory(User::class)->create();
    $response = $this->post('/login', [
      'email' => $user->email,
      'password' => 'secret',
    ]);

    $this->assertAuthenticatedAs($user);

  }



}
