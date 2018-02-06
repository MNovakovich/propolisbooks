<!DOCTYPE html>
<html>
<head>
  <title></title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>
<body style="background-color: rgba(0, 0,0, 0.5);">

  <div class="row" >
    <div class="modal-header">
           <a href="/companies/{{$company}}/edit"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
           <h4 class="modal-title">Izmeni kupca</h4>
        </div>
     <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
                @extends('layouts.errors')

            </div>
            <div class="panel-body" style="background-color: orange">
               <div class="row">
                  <div class="col-md-6">
                <form method="POST" action="/companies/{{$company->id}}">
                   <div class="form-group">
                       <label for="title">Naziv:</label>
                       <input type="text" class="form-control" name="name" id="name" placeholder="naziv" value="{{$company->name}}">
                    </div><br>
                    <div class="form-group">
                      <label for="price">Adresa: </label><br>
                      <input type="text" class="form-control" id="price" name="address" placeholder="adresa" value="{{$company->address}}">
                    </div>
                    <div class="form-group">
                          <label>Grad: </label>
                           
                           <select class="form-control" id="sel1" name="city_id" >
                               <option value="{{$company->id}}" >{{$company->cities->name}}</option>
                            @foreach($cities as $city)

                              <option value="{{$city->id}}"> {{$city->name}}</option>
                              
                            @endforeach
                          </select>
                       </div>
                      <div class="form-group">
                          <label for="pib">PIB:</label><br>
                           <input type="text"   id="pib" name="pib"  size="25" value="{{$company->pib}}">
                     </div>
                     <div class="form-group">
                      <label for="discount_price">E Mail:</label><br>
                      <input type="text"   id="email" name="email" placeholder="example@gmail.com" size="20" value="{{$company->email}}">
                    </div>
                     <div class="checkbox">
                      @if($company->active ==1)
                        <h4><label><input type="checkbox" name="active" value="1" checked>Aktivan</label></h4>
                      @else
                         <h4><label><input type="checkbox" name="active" value="0" >Aktivan</label></h4>
                      @endif
                      </div>
                    
                   
                   </div><!-- md  -6 -->
                   <div class="col-md-6">
                       <div class="form-group">
                          <label>Kategorija: </label>
                           <select class="form-control" id="sel1" name="category_id">
                               <option value="{{$company->categories->id}}">{{$company->categories->title}}</option>
                            @foreach($categories as $category)

                              <option value="{{$category->id}}"> {{$category->title}}</option>
                              
                            @endforeach
                          </select>
                       </div>
                       <div class="form-group">
                          <label for="comment">Komentar :</label>
                          <textarea class="form-control" rows="5" id="note" name="note">{{$company->note}}</textarea>
                       </div>
                       <div class="form-group">
                          <label for="contact_person">Kontakt osoba:</label><br>
                           <input type="text"   id="contact_person" name="contact_person"  size="25" value="{{$company->contact_person}}">
                       </div>
                      <div class="form-group">
                         <label for="number">Kontakt telefon:</label><br>
                         <input type="text"   id="number" name="number" placeholder="011/123..." size="20" value="{{$company->number}}">
                    </div>
                    </div>

                 </div><!-- row -->
                  {{ csrf_field()}}
                  {{ method_field('PATCH') }}
                   <button style="margin-right:10px; " type="submit" class="btn btn-primary btn-lg"">Dodaj</button>
                   
                  </form>
                  <a href="/companies"><button class="btn btn btn-sm"">Odustani</button></a>
            
           </div>

            <!-- /.panel -->
     </div>
     <!-- /.col-lg-12 -->
   <div>
            <!-- /.row -->
</body>
</html>