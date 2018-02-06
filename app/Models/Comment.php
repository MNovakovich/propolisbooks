<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table ='comments';
    protected $fillebal = ['company_id','body'];

    public function companies()
    {
    	return $this->belongsTo("App\Models\Company","company_id");
    }

    
}
