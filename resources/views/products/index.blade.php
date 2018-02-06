@extends('layouts.master')

@section('title')

Products		

@endsection('title')

@section('headline')
  Lista knjiga
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
                                        <th>Autor</th>
                                        <th>Cena</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($books as $book)
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;"><?php echo $num++ ; ?></td>

                                       <td><a href="/products/{{$book->id}}">{{$book->title}}</a></td>
                                        <td><a href="/products/{{$book->id}}">{{$book->writers->first_name}} {{$book->writers->last_name}}</a></td>
                                        <td style="text-align: center;"  class="center">{{$book->price}}</td>
                                        <td class="center">
                                        	
                                         <form method="post" action="/products/{{ $book->id }}">
                                                {{ method_field('DELETE') }}
                                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           <button type="submit" class="btn-danger btn-xs ">Delete</button>
                                       </form>

                                        </td>
                                  
                                    </tr>
                                  @endforeach()
                                   
                                </tbody>
                            </table>
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
 
@endsection('content')