@extends('/wrapper')

@section('content')

<div class="col-6 forms my-5">

<form action="" method="post">
{{ csrf_field()}}  

<div class="form-group">
<label class="col-form-label" for="name" >Name of Author</label>
<input class="form-control" type="text" name="name" value="{{ $author->name }}">

<label class="col-form-label" for="year">Year of Birth</label>
<input class="form-control" type="int" name="year" value="{{ $author->year }}">

<button type="submit" class="btn btn-primary" value="save">Submit</button>
</div>
</form>
</div>
@endsection