@extends('layouts.master')
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    min-height: 100%;
}

.info-company{
  font-size: 20px;
}
table, th, td {
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
.line{
  border: 1px solid #ccc;
}
</style>
@section('content')

  @section('headline')
    <h2 style="color: blue;">{{$company->name}}</h2>
  @endsection('hedline')

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Info')">Opsti podaci</button>
  <button class="tablinks" onclick="openCity(event, 'Coments')">Komentari</button>
  <button class="tablinks" onclick="openCity(event, 'Products')">Prodaja</button>
</div>
@extends('layouts.errors')
@if (session('status'))
    <div class="alert alert-success">
        <h3>{{ session('status') }}</h3>
     </div>
  @endif
<div id="Info" class="row tabcontent navbar-default tablinks active" >
  <!-- ************************ ADDRESS *************************************** -->
         @include('companies.layouts.info')

    
</div><!-- row -->

<!-- **************************** COMMENTS *********************************** -->
<div id="Coments" class="tabcontent">
         @include('companies.layouts.comments')
</div>

<!-- **************************** PRODUCTS *********************************** -->
<div id="Products" class="tabcontent">
        @include('companies.layouts.invoices')
</div> 

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
@endsection('content')
