<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class Writer extends Model
{
    protected $table = 'writers';

    protected $fillable =['first_name','last_name'];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
