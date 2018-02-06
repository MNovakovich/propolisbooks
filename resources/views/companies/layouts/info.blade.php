  <div class="col-md-6">
  

    <table class="table">

      <tr>
        <td style="width: font-size:; " rowspan="2">ADRESA:</td>
        <td class="info-company"><strong>{{$company->address}}</strong></td>
        
      </td>
      <tr>
         <td><strong> {{$company->cities->code}} {{$company->cities->name}}</strong></td>  
      </tr>
     <tr>
        <td>PIB</td>
        <td><strong> {{$company->pib}}</strong></td>   
     </tr>
     <tr>
        <td>TELEFON</p>
        <td><strong> {{$company->number}}</strong></td>
     </tr>
     <tr>
        <td>KONTAKT OSOBA</p>
        <td><strong> {{$company->contact_person}}</strong></td>
     </tr>
     <tr>
        <td>KATEGORIJA :</p>
        <td><strong> {{$company->categories->title}}</strong></td>
     </tr>
     <tr> 
       <td>AKTIVAN :</td>

       @if($company->active == 1)
          <td><strong>DA</strong></td>
        @else
           <td><strong>DA</strong></td>
        @endif
      </tr>

   </table>

   <!-- ************************  EDIT / DELETE ********************************* -->

   <a href="/companies/{{$company->id}}/edit"><button style="float: left;  margin-right: 10px;" class="btn-primary btn-xs " data-toggle="modal" data-target="#myModal">Edit</button></a>
     <form style="float:left" method="post" action="/companies/{{ $company->id }}">
        {{ method_field('DELETE') }}
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <button type="submit" class="btn btn-danger  btn-xs">Delete</button>
     </form>
  <!-- ************************  EDIT / DELETE ********************************* -->

  </div><!-- col md -6 -->
<div class="col-md-6">
   <tr>
     <td><h3 style="color: orange;">NAPOMENA!</h3></p>
     <td><strong> {{$company->note}}</strong></td>
  </tr>

</div><!-- col md 6 -->