<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests\RegisterClientRequest;

<<<<<<< HEAD
class ClientsController extends Controller
{

  public function getClient(){

     $clients = Client::Where('id', '974312056-4')->get();
     return dd($clients);
  }

=======
class ClientsController extends Controller{

  public function __construct(){
      $this->middleware('auth');
  }


////////////////////////////////////////////////////////////
  public function register(){
    return view('clients/insert');
  }

  public function create(RegisterClientRequest $request) {

    $client = Client::create([
      'id' => $request['id'],
      'name' => $request['name'],
      'address' => $request['address'],
      'city' => $request['city'],
      'cellphone' => $request['cellphone'],
      'phone' => $request['phone'],
      'contact_name' => $request['contact_name'],
      'extension_number' => $request['extension_number'],
      'email' => $request['email'],
    ]);

    return redirect('/dashboard');

    // dd($client);
  }
>>>>>>> Clients
}
