<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Writer;
use App\Models\Stock;

class Product extends Model
{

	const DISCOUNT  = 1;
	const NOT_DISCOUNT = 0;
    protected $table = "products";


    protected $fillable =['title','image','price','discount_price','discount','writer_id'];

     public function addWriter($writer)
     {
     	$this->writers::create($writer);
     }
     public function writers(){
    	return $this->belongsTo('App\Models\Writer', 'writer_id');
    }

    public function stocks()
    {
      return $this->hasMany(Stock::class);
    }

    public static function discount()
    {
    	return static::where('discount',1)->get();
    }
    public function scopeSumItem($query)
    {
        return $query->where('id'>4);
    }

    
   /* public function addWriter($request)
    {
    	   	  return $this->writers()->create(compact($request));
    }*/



}
