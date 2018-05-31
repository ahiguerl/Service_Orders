<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
  protected $table = 'service_orders';
  protected $fillable = ['client_id', 'is_open'];
  protected $guarded = ['id'];

  // Relationships
  public function workOrder(){
    return $this->hasMany('\App\WorkOrder');
  }

  public function client(){
    return $this->belongsTo('\App\Client');
  }

  // end Relationships


}
