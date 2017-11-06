@extends('/wrapper')

@section('content')

<div class="col mt-5">

<ul class="list-group">
<li class="list-group-item active">Name: {{$author->name}}</li>
<li class="list-group-item">Year of birth: {{$author->year}}</li>
</ul>

<a href="{{ action('AuthorController@edit', ['id' => $author->id])}}" class="btn btn-primary">Edit</a>





</div>

@endsection