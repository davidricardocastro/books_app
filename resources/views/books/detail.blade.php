@extends('/wrapper')

@section('content')



<div class="col mt-5">


<?php
//retrieves data from authors table
//$author=App\Author::find($book->author_id);



?>

<ul class="list-group">
  <li class="list-group-item active">Title: {{$book->title}}</li>
  <li class="list-group-item">Author: {{$book->author->name}}</li>
  <li class="list-group-item">Published: {{$book->published_at}}</li>
  <li class="list-group-item">Finished reading: {{$book->finished_reading_at}}</li>
  <li class="list-group-item">Review: {{$book->my_review}}</li>
  <li class="list-group-item">Rating: {{$book->my_rating}}</li>
</ul>




  

<a href="{{ action('BookController@edit', ['id' => $book->id])}}" class="btn btn-primary">Edit Book</a>


</div>
@endsection