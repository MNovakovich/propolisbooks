@extends('layouts.master')

@section('title')

Products		

@endsection('title')

@section('headline')
  Lager
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>R br.</th>
                                        <th>Naslov</th>
                                        <th>Kolicina</th>
                                        <th>Cena</th>
                                        <th>Vrednost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($books as $book)
                                    <tr class="odd gradeX">
                                       
                                         <td style="text-align: center;"><?php echo $num++ ; ?></td>
                                         <td>{{$book->title}}</td>
                                         <td>{{$quantity = $book->stocks->pluck('quantity')->sum()}}</td>
                                         <td>{{$price = $book->price}}</td>
                                         <td>{{$price * $quantity}}</td>

                                        </td>
                                   @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
  

           
 
@endsection('content')