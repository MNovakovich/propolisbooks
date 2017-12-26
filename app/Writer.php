<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $table ='writers';
    protected $fillable =['first_name','last_name'];		
    public $timestamps = false;


    public function products(){
    	return $this->hasMany('App\Models\Product');
    }

    public static function getAllWriters()
    {
    	return static::all();
    }
}
