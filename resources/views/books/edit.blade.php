@extends('/wrapper')

@section('content')
<div class="col-6 forms my-5">
<?php
//retrieves data from authors table
$authors=App\Author::get();
?>

<form action="" method="post">

{{ csrf_field()}}  
<div class="form-group">
<label class="col-form-label" for="title" >Title</label>
<input class="form-control" type="text" name="title" value="{{ $book->title }}">

<label class="col-form-label" for="author_id" >Author</label>
<select class="form-control" name="author_id" value="{{ $book->author_id }}">

@foreach($authors as $author)

<option  value="{{$author->id}}">{{$author->name}} </option>

@endforeach

</select>


<label class="col-form-label" for="published_at">Published (year)</label>
<input class="form-control" type="int" name="published_at" value="{{ $book->published_at }}">

<label class="col-form-label" for="finished_reading_at">Finished Reading</label>
<input class="form-control" type="date" name="finished_reading_at" value="{{ $book->finished_reading_at }}">

<label class="col-form-label" for="my_review">Review</label>
<textarea class="form-control" rows="4" cols="50" name="my_review" value="{{ $book->my_review }}">{{ $book->my_review }}</textarea>

<label class="col-form-label" for="my_rating">Rating</label>
<input class="form-control" type="int" name="my_rating" value="{{ $book->my_rating }}">


<button name="button" type="submit" class="btn btn-primary" value="save">Submit</button>
</div>
</form>
</div>
@endsection