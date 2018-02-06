 <div class="comments" style="max-width: 500px">
     <form method="POST" action="/companies/{{$company->id}}/comments">
          {{ csrf_field() }}
        <div class="form-group">
           <label for="comment">Unesi komentar:</label>
           <textarea  class="form-control" rows="4" id="comment" name="body"></textarea>
        </div>
        <button class="btn btn-success">Posalji</button>
     </form>


  </div><!--  .comments -->
  <div class="panel-heading">                   
<hr class="line">

  @foreach($company->comments as $comment)
   <ul class="list-group"> 
      <strong>{{$comment->created_at->day}}. {{$comment->created_at->month}}. {{$comment->created_at->year}}.</strong>
  <li class="groupt-item">
     {{$comment->body}}
  </li>

</ul><!-- list-group -->
<hr class="line">
  @endforeach
   </div><!--   -->