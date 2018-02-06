@extends('layouts.master')

@section('title')

Products    

@endsection('title')

@section('headline')
  Ustanove
 <div>
  <form method="GET" action="companies">
    <div style="padding-top: 10px;" class="form-group">
      <select onchange="window.location='?category='this.value" style="float: left; max-width: 300px;" class="form-control" id="sel1">
        <option><h3>Odaberi kategoriju</h3></option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->title}}</option>
     

        @endforeach
      </select>
    </div>
</form> 
  </div>


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
                                        <th>USTANOVA</th>
                                        <th>GRAD</th>
                                        <th>KATEGORIJA</th>
                                        <th>Kolicina</th>
                                    </tr>

                                </thead>
                                <tbody>
                                 @foreach($companies as $company)
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;"><?php echo $num++ ; ?></td>

                                       <td><a href="/companies/{{$company->id}}">{{$company->name}}</a></td>
                                        <td><a href="/companies/{{$company->id}}">{{$company->cities->name}}</a></td>
                                        <td style="text-align: center;"  class="center">{{$company->categories->title}}</td>
                                        <td class="center">
                                          
                                        <a href="/companies/{{$company->id}}"><button style="float: left;  margin-right: 10px;" class="btn-success btn-xs " data-toggle="modal" data-target="#myModal">Detail</button></a>
                                        <a href="/companies/{{$company->id}}/edit"><button style="float: left;  margin-right: 10px;" class="btn-primary btn-xs " data-toggle="modal" data-target="#myModal">Edit</button></a>
                                        <form style="float:left" method="post" action="/companies/{{ $company->id }}">
                                           {{ method_field('DELETE') }}
                                                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                         <button type="submit" class="btn btn-danger  btn-xs">Delete</button>
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
            <div class="row">
            </div>
 
@endsection('content')