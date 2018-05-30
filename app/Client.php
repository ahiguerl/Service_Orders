<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
      'id',
      'name',
      'address',
      'city',
      'cellphone',
      'phone',
      'contact_name',
      'extension_number',
      'email',
    ];


    //Relationships
    public function serviceOrder(){
      return $this->hasMany('\App\ServiceOrder');
    }
    //End Relationships
}
