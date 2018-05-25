<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
  /**
  * A basic test example.
  *
  * @return void
  */

  // public function testGettingService(){
  //
  //   $response = $this->get('/services/works/1');
  //   // $response->assertSuccessful();
  //   $response->assertSeeText('context');
  // }


  public function testDataBase(){

    $this->assertTrue(true);
    //
    // $response = $this->get('/clients');
    //
    // $this->assertDatabaseHas('clients', [
    //    'id' => '974312056-4'
    // ]);
  }
}
