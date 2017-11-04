<h1>{{$author->name}}</h1>

<div class="year">
<p>Year of birth: {{$author->year}}</p>

<a href="{{ action('AuthorController@edit', ['id' => $author->id])}}" class="btn btn-primary">Edit</a>



</div>