<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Comment;

class CompanyCommentsController extends Controller
{
    public function store( Company $company){

        $this->validate(request(), [
         'body'=>'required|string|min:5|max:500'
       ]);
       

    	$comment =  new Comment;
    	$comment->body = request('body');
    	$comment->company_id =  $company->id;
        $comment->save();
       
       return redirect('/companies/'.$company->id)->with('status', 'Dodali ste komentar!');
    }
}
