<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Writer;

use Auth;

class ProductsController extends Controller
{
    
    public function index()
    {
       //  dd(pederikan('ckapi'));
        
        $books = Product::all();
             // ->orderBy('title','desc');

        return view('products.index',compact('books'));
    }

   
    public function create()
    {    
        
        $writers = Writer::all();
        return view('products.create', compact('writers'));
    }

    public function store(Request $request)
    {
        $request->validate([
          'title' => 'required|max:50',    
          'price' => 'required',    
          ]);
         $book = new Product;
         $book->title = $request->input('title');
         $book->price = $request->input('price');
         $book->discount_price = $request->input('discount_price');
         $book->discount  = Product::NOT_DISCOUNT;
         $book->writer_id = $request->input('writer_id');

         if($request->hasFile('image'))
         { 
            $image = $request->file('image')->store('images');
            $filename = $request->file('image')->getClientOriginalName();
            $book->image = $filename;
         }

           $book->save();
           return redirect('products')->with('status', 'Uspesno ste dodali novi naslov  '.$book->title.'!');

    }

    public function show($id)
    {

        $product = Product::find($id);
    
        return view('products.show', compact('product'));
    }

   
    public function edit($id)
    {

        $product =  Product::findOrFail($id);
        $writers = Writer::all();
        return view('products.edit', compact('product','writers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
          'title' => 'required|max:50',    
          'price' => 'required',    
          ]);
         
         $book = Product::find($id);
         $book->title = $request->input('title');
         $book->price = $request->input('price');
         $book->discount_price = $request->input('discount_price');
         $book->discount  = Product::NOT_DISCOUNT;
         $book->writer_id = $request->input('writer_id');

         if($request->hasFile('image'))
         { 
            $image = $request->file('image')->store('images');
            $filename = $request->file('image')->getClientOriginalName();
            $book->image = $filename;
         }

           $book->save();
            return redirect('products')->with('status', 'Profile updated!');
    }

  
    public function destroy($id)
    {
         $product = Product::find($id);
         $product->delete();

         return redirect('products')->with('status', 'Uspesno izbrisan naslov'.$product->title.'!');
    }

    public function getWriter()
    {
        return view('products.create');
    }

    public function storeWriter(Request $request, Product $product)
    {
        
          $product->addWriter(request([
              'first_name',
              'last_name'
          ]));
    }
}
