@extends('/wrapper')

@section('content')
    
<div class="col-6 mt-5">
<ul class="list-group" id="authorlist">

<li class="list-group-item active">Authors</li>

@foreach($authors as $author)
<li class="list-group-item">

<a href="{{route('author detail', ['id'=> $author->id])}}">{{$author->name}}</a>
({{$author->year}})
 

</li>
@endforeach


</ul>
</div>
@endsection