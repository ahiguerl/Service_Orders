<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Importante para poder aplicar las consultas de agregación

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

    return redirect('/dashboard')->with('success', 'El cliente fue creado exitosamente!.');

    // dd($client);
  }

  public function list(){

    $clients = Client::paginate(10); // Approach the ORM to get the data form the DB
    return view('clients.list', [
      'clients' => $clients,
    ]);
  }

  public function deleteClient($id){
    $client = DB::table('clients')->where('id', $id)->delete();

    return redirect('/clients/list')->with('danger', 'El cliente fue borrado exitosamente!.');
  }

  public function destroyClient(RegisterClientRequest $request, $id){
    if($request->ajax()){
      $client = Client::find($id);
      $client->delete();

      return response()->json([
        'message' =>  'El cliente ' . $client->name . ' fue eliminado correctamente',
      ]);
    }
  }

}
