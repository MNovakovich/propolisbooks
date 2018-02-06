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
                @extends('layouts.errors')

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
                      <label for="discount_price">Cena sa popustom</label><br>
                      <input type="text"   id="discount_price" name="discount_price" placeholder="discount_price" size="12">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Slika:</label>
                      <input type="file" class="form-control" id="image" name="image" >
                    </div>
                   
                   </div><!-- md  -6 -->
                   <div class="col-md-6">
                       <div class="form-group">
                          <label>Pisac: </label>
                          <select multiple class="form-control" name="writer_id"  >
                            @foreach($writers as $writer)
                              <option value="{{$writer->id}}"> {{$writer->first_name}} {{$writer->last_name}}</option>
                              
                            
                            @endforeach
                          </select>
                        </div>


                   </div>
                 </div><!-- row -->
                  {{ csrf_field()}}
                   <button type="submit" class="btn btn-primary btn-lg"">Submit</button>
                  </form>

                        <!-- ************************************************************************ -->
                        <button type="button" class="btn btn-info btn pull-right" data-toggle="modal" data-target="#myModal">dodaj novog pisca</button>

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                  
                                       <form method="POST" action="/writers">
                                                {{ csrf_field()}}
                                           <div class="form-group">
                                              <label for="ime">Ime</label>
                                              <input type="text" class="form-control" name="first_name" id="ime" placeholder="Ime">
                                           </div>
                                           <div class="form-group">
                                              <label for="prezime">Prezime</label>
                                              <input type="text" name="last_name" class="form-control" id="prezime" placeholder="Prezime">
                                           </div>
                                  
                                            <button type="submit" class="btn btn-primary">Dodaj</button>
                                       </form>
                      

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>



                        <!-- ************************************************************************ -->
           </div>

            <!-- /.panel -->
     </div>
     <!-- /.col-lg-12 -->
   <div>
            <!-- /.row -->
   
@endsection('content')