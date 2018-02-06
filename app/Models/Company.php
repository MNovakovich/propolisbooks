<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\City;
use App\Models\Category;
use App\Models\Comment;

class Company extends Model
{

	use SoftDeletes;


    protected $table = 'companies';
    protected $fillable = ['name','address','number','email','pib','contact_person','category_id','note','active','city_id'];
    
    protected $dates = ['deleted_at'];
    
    public function cities()
    {
    	return $this->belongsTo("App\Models\City","city_id");
    }

    public function categories(){
    	return $this->belongsTo("App\Models\Category","category_id");
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public static function isActive()
    {
    	return static::where('active',1);
    }

    public function addComments($body)
    {
         $this->comments()->create(compact('body'));
    }

}
