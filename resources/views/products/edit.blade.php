@extends('layouts.master')
 <!-- /.row -->
 <div class="row">
     <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
                 << <a class="btn" href="/products">Vrati se nazad</a>
            </div>
            <div class="panel-body">
               <div class="row">
                  <div class="col-md-6">
               <form action="/products/{{$product->id}}" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                       <label for="title">Naslov:</label>
                       <input type="text" class="form-control" name="title" id="title" placeholder="title" value="{{$product->title}}">
                    </div><br>
                    <div class="form-group">
                      <label for="price">Cena</label><br>
                      <input type="text" cl id="price" name="price" placeholder="price" size="12" value={{$product->price}}>
                    </div>
                     <div class="form-group">
                      <label for="discount_price">Cena sa popustom</label><br>
                      <input type="text"   id="discount_price" name="discount_price" placeholder="discount_price" size="12" value="{{$product->discount_price}}">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Slika:</label>
                      <input type="file" class="form-control" id="image" name="image" placeholder="text" value="{{$product->image}}">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" name="discount" value=1> Popust</label>
                    </div>
                   
                   </div><!-- md  -6 -->
                   <div class="col-md-6">
                       <div class="form-group">
                          <label>Pisac: </label>
                          <select multiple class="form-control" name="writer_id"  >
                             <option value="{{$product->writers->id}}"> {{$product->writers->first_name}}  {{$product->writers->last_name}}</option>
                            @foreach($writers as $wr)
                              <option value="{{$wr->id}}"> {{$wr->first_name}} {{$wr->last_name}}</option>
                              
                            @endforeach
                           
                          </select>
                        </div>

                   </div>
                 </div><!-- row -->
                   <!--  <input type="hidden" name="_method" value="PUT"> -->
                    {{ method_field('PATCH') }}
                  {{ csrf_field()}}
                   <button type="submit" class="btn btn-default">Submit</button>
                  </form>
           </div>
            <!-- /.panel -->
     </div>
     <!-- /.col-lg-12 -->
   <div>
            <!-- /.row -->
   
