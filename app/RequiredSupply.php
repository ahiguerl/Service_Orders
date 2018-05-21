<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequiredSupply extends Model
{
    protected $table = 'required_supplies';
    protected $fillable =['supply_id','product_id','repair_process_id','quantity'];
    protected $guarded = ['id'];



    // Relationships many to many
    // public function workOrders(){
    //   return $this->belongsToMany('\App\WorkOrder','repair_process_work_order'); // The seconf param is the pivot table
    // }
    //
    // public function product(){
    //     return $this->belongsToMany('\App\Product','required_supplies')->withPivot('quantity');
    // }
    //
    // public function supply(){
    //     return $this->belongsToMany('\App\Supply','required_supplies')->withPivot('quantity');
    // }
    // // End Relationships

}
