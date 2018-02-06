@extends('layouts.master')

@section('headline')
  PISCI
@endsection('headline')

@section('content')
 
<?php
 $num = 1;

?>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       @if (session('status'))
                          <div class="alert alert-success">
                         <h3>{{ session('status') }}</h3>
                           </div>
                       @endif
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">        
                            
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Spisak pisaca
                            @extends('layouts.errors')
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                
                                	 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ime</th>
                                            <th>Prezime</th>
                                            <th>Prezime</th>
                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($writers as $writer)
                                        <tr>
                                            <td><?= $num++ ;?></td>
                                            <td>{{$writer->first_name}}</td>
                                            <td>{{$writer->last_name}}</td>
                                            <td>
                                               <a href="/writers/{{ $writer->id }}/promeni"><button style="float: left;  margin-right: 10px;" class="btn-primary btn-xs " data-toggle="modal" data-target="#myModal">Edit</button></a>
                                               <form style="float:left" method="post" action="/writers/{{ $writer->id }}">
                                                  {{ method_field('DELETE') }}
                                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                 <button type="submit" class="btn btn-danger  btn-xs">Delete</button>
                                               </form>
                                             
                                             </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

   
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Dodaj novog pisca</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        
                                    </thead>
                                    <tbody>
                                       <form method="POST" action="/writers">
                                       	  {{ csrf_field()}}
										  <div class="form-group">
										    <label for="ime">Ime</label>
										    <input type="text" class="form-control" name="first_name" id="ime" placeholder="Ime"">
										  </div>
										  <div class="form-group">
										    <label for="prezime">Prezime</label>
										    <input type="text" name="last_name" class="form-control" id="prezime" placeholder="Prezime">
										  </div>
						
										  <button type="submit" class="btn btn-primary  data-toggle="modal" data-target="#error">Dodaj</button>
										</form>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            
                    <!-- /.panel -->
                </div>
                      <!-- /.col-lg-6 -->

                     <!-- ---------------------------
                        POPUP FOR UPDATE WRITERS
                        ---------------------------- -->

                     
                     <!-- ------------------------- -->

@endsection('content')