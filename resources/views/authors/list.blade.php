<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<ul id="authorlist">



@foreach($authors as $author)
<li>

<a href="{{route('author detail', ['id'=> $author->id])}}">{{$author->name}}</a>
({{$author->year}})
 </li>

</li>
@endforeach


</ul>

</body>
</html>