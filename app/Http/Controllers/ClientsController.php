<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterClientRequest;


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
      'id' => $request['ide'],
      'name' => $request['name'],
      'address' => $request['address'],
      'city' => $request['city'],
      'cellphone' => $request['cellphone'],
      'phone' => $request['phone'],
      'contact_name' => $request['contact_name'],
      'extension_number' => $request['ext'],
      'email' => $request['email'],
    ]);

    return redirect('/dashboard');

    // dd($client);
  }

}
