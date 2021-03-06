<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Stock extends Model
{
    protected $table = 'stocks';

    protected $fillable = ['product_id','quantity'];


    public function products(){
    	return $this->belongsTo(Product::class);
    }
}
