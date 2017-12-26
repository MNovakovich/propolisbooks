<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table ='products';
    protected $fillable =['title','image','price','price_discount','discount','writer_id'];		
    public $timestamps = false;

    public function writers(){
    	return $this->belongsTo('Аpp\Writer');
    }
}
