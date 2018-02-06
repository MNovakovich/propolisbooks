<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Company;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable =['title','description'];

    public function companies(){
    	return $this->hasMany(Company::class);
    }
}
