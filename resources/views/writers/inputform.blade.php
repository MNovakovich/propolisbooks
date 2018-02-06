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

   <!-- Modal -->
  <div class="" id="myModal" role="dialog">
     <div class="modal-dialog">
     
                              <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
           <a href="/writers"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
           <h4 class="modal-title">Izmeni ime: </h4>
        </div>
        <div class="modal-body">   
                <form method="POST" action="/writers/{{$writer->id}}">
                        {{ method_field('PATCH') }}
                         {{ csrf_field()}}
                    <div class="form-group">
                      <label for="ime">Ime</label>
                       <input type="text" class="form-control" name="first_name" id="ime" placeholder="name" value="{{$writer->first_name}}">
                    </div>
                    <div class="form-group">
                       <label for="prezime">Prezime</label>
                      <input type="text" name="last_name" class="form-control" id="prezime" placeholder="Prezime" value="{{$writer->last_name}}">
                    </div>
                                  
                     <button type="submit" class="btn btn-primary">Promeni</button>
               </form>
                      

         </div>
        <div class="modal-footer">
           <a href="/writers"><button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button></a>
         </div>
       </div>
                              
     </div>
   </div>
</body>
</html>