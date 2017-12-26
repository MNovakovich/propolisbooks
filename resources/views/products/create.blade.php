
@extends('layouts.master')

@section('title')

Products        

@endsection('title')

@section('headline')
  Dodaj novu knjigu
@endsection('headline')

@section('content')
    

 <!-- /.row -->
 <div class="row">
     <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
                 Unesi novu knjigu  
            </div>
            <div class="panel-body">
               <div class="row">
                  <div class="col-md-6">
                <form method="POST" action="/products" enctype="multipart/form-data">
                   <div class="form-group">
                       <label for="title">Naslov:</label>
                       <input type="text" class="form-control" name="title" id="title" placeholder="title">
                    </div><br>
                    <div class="form-group">
                      <label for="price">Cena</label><br>
                      <input type="text" cl id="price" name="price" placeholder="price" size="12">
                    </div>
                     <div class="form-group">
                      <label for="price_discount">Cena sa popustom</label><br>
                      <input type="text"   id="price_discount" name="price_discount" placeholder="price_discount" size="12">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Slika:</label>
                      <input type="file" class="form-control" id="image" name="image" placeholder="text">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" name="discount" value=1> Popust</label>
                    </div>
                   
                   </div><!-- md  -6 -->
                   <div class="col-md-6">
                       <div class="form-group">
                          <label>Pisac: </label>
                          <select multiple class="form-control" name="writer_id">
                            @foreach($writers as $writer)
                              <option value="{{$writer->id}}"> {{$writer->first_name}} {{$writer->last_name}}</option>
                              
                            
                            @endforeach
                          </select>
                        </div>

                   </div>
                 </div><!-- row -->
                  {{ csrf_field()}}
                   <button type="submit" class="btn btn-default">Submit</button>
                  </form>
           </div>
            <!-- /.panel -->
     </div>
     <!-- /.col-lg-12 -->
   <div>
            <!-- /.row -->
   
@endsection('content')