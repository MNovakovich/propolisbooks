<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Stock;

class ProductStockController extends Controller
{
    
    public function index()
    {
        $books =  Product::orderBy('title','asc')->get();
       return view('stocks.index', compact('books'));
    }

    
    public function create()
    {

    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
       
    }

    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
    
    }
}
