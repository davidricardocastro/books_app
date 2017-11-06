
    @extends('/wrapper')

@section('content')

<div class="col-6 mt-5">

<ul class="list-group" id="booklist">

<li class="list-group-item active">Books</li>

@foreach($books as $book)
<li class="list-group-item">

<a href="{{route('book detail', ['id'=> $book->id])}}">{{$book->title}}</a>

 </li>

</li>
@endforeach


</ul>
</div>
@endsection