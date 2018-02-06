<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable =['code','name'];

    public function companies()
    {
    	return $this->hasMany(Company::class);
    }
}
