<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

  public function getClient(){

     $clients = Client::Where('id', '974312056-4')->get();
     return dd($clients);
  }

}
