@extends('layouts.master')

@section('title')

Products        

@endsection('title')

@section('headline')

@endsection('headline')

@section('content')
    

 <!-- /.row -->
 <div class="row">
     <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
                 << <a class="btn btn-primary" href="/products">Vrati se nazad</a>
            </div>
            @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
            <div class="panel-body">
             
       
            <!-- /.panel -->
            <h1>{{$product->title}}</h1>
            <h3>{{$product->writers->first_name}} {{$product->writers->last_name}}</h3>
            <p><strong>Cena:</strong> {{$product->price}}</p>
            <p><strong>Cena na popustu:</strong> {{$product->discount_price}}</p>
           @if($product->discount ==1)
            <p><strong>Knjiga je na akciji</strong></p>
            @else 
              <p><strong>Godina izdanja:</strong> {{$product->created_at->day}}. {{$product->created_at->month}}. {{$product->created_at->year}}.</p>
            @endif

             </div>
             <div style="overflow: hidden;">
                <a style="float: left; margin-right: 20px" class="btn btn-primary" href="{{$product->id}}/edit">Promeni</a>&nbsp;&nbsp;
           
                <form style="float:left" method="post" action="/products/{{ $product->id }}">
                {{ method_field('DELETE') }}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <button type="submit" class="btn btn-danger">Izbrisi</button>
            </form>
            </div>


          </div>
     </div>
     <!-- /.col-lg-12 -->
   <div>
            <!-- /.row -->
   
@endsection('content')