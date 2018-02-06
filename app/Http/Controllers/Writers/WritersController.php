<?php

namespace App\Http\Controllers\Writers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Writer;

class WritersController extends Controller
{
  
    public function index()
    {
       
        $writers =  Writer::orderBy('first_name','asc')->get();
        return view('writers.index', compact('writers'));
    }

    public function store(Request $request)
    {
       $request->validate([
         'first_name'=>'required|string|max:50',
         'last_name'=>'required|string|max:50',
       ]);

       $writer = new Writer;
       $writer->first_name = $request->input('first_name');
       $writer->last_name = $request->input('last_name');
       $writer->save();
       return redirect('/writers')->with('status', 'Pisac '.$writer->first_name.' '.$writer->last_name.' je dodat na spisak!');

    }
     
    public function editWriter($id)
    {

      $writer =  Writer::find($id);
       
      return view('writers.inputform', compact('writer'));
    }
 
    public function show($id)
    {
        
    }

 
    public function edit($id)
    {
       $writer =  Writer::find($id);
      
       return view('writers.index',compact('writer'));
    }


    public function update(Request $request, Writer $writer)
    {          
          $writer->update($request->all());
           return redirect('writers')->with('status', 'Uspesno izbrisan azurirali '.$writer->first_name.' '.$writer->last_name.'!');
    }

    public function destroy($id)
    {
         $writer = Writer::find($id);
         $writer->delete();
         return redirect('writers')->with('status', 'Uspesno izbrisan pisac'.$writer->first_name.' '.$writer->last_name.'!');
    }
}
