@extends('layouts.master')

@section('title')

Products        

@endsection('title')

@section('headline')
 Dodaj novog saradnika
@endsection('headline')

@section('content')
    
 <!-- /.row -->
 <div class="row" >
     <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
                @extends('layouts.errors')

            </div>
            <div class="panel-body" style="background-color: orange">
               <div class="row">
                  <div class="col-md-6">
                <form method="POST" action="/companies">
                   <div class="form-group">
                       <label for="title">Naziv:</label>
                       <input type="text" class="form-control" name="name" id="name" placeholder="naziv ">
                    </div><br>
                    <div class="form-group">
                      <label for="price">Adresa: </label><br>
                      <input type="text" class="form-control" id="price" name="address" placeholder="adresa">
                    </div>
                    <div class="form-group">
                          <label>Grad: </label>
                           
                           <select class="form-control" id="sel1" name="city_id">
                               <option>Odaberi grad</option>
                            @foreach($cities as $city)

                              <option value="{{$city->id}}"> {{$city->name}}</option>
                              
                            @endforeach
                          </select>
                       </div>
                      <div class="form-group">
                          <label for="pib">PIB:</label><br>
                           <input type="text"   id="pib" name="pib"  size="25">
                     </div>
                     <div class="form-group">
                      <label for="discount_price">E Mail:</label><br>
                      <input type="text"   id="email" name="email" placeholder="example@gmail.com" size="20">
                    </div>
                     <div class="checkbox">
                        <h4><label><input type="checkbox" name="active" value="1" checked>Aktivan</label></h4>
                      </div>
                    
                   
                   </div><!-- md  -6 -->
                   <div class="col-md-6">
                       <div class="form-group">
                          <label>Kategorija: </label>
                           <select class="form-control" id="sel1" name="category_id">
                               <option>Odaberi kateogriju</option>
                            @foreach($categories as $category)

                              <option value="{{$category->id}}"> {{$category->title}}</option>
                              
                            @endforeach
                          </select>
                       </div>
                       <div class="form-group">
                          <label for="comment">Komentar :</label>
                          <textarea class="form-control" rows="5" id="note" name="note"></textarea>
                       </div>
                       <div class="form-group">
                          <label for="contact_person">Kontakt osoba:</label><br>
                           <input type="text"   id="contact_person" name="contact_person"  size="25">
                       </div>
                      <div class="form-group">
                         <label for="number">Kontakt telefon:</label><br>
                         <input type="text"   id="number" name="number" placeholder="011/123..." size="20">
                    </div>
                    </div>

                 </div><!-- row -->
                  {{ csrf_field()}}
                   <button style="margin-right:10px; " type="submit" class="btn btn-primary btn-lg"">Dodaj</button>
                   
                  </form>
                  <a href="/products"><button class="btn btn btn-sm"">Odustani</button></a>
            
           </div>

            <!-- /.panel -->
     </div>
     <!-- /.col-lg-12 -->
   <div>
            <!-- /.row -->
   
@endsection('content')