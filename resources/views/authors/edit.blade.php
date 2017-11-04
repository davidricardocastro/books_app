<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New author</title>
</head>
<body>


<form action="" method="post">
{{ csrf_field()}}  
<label for="name" >Name of Author</label>
<input type="text" name="name" value="{{ $author->name }}">

<label for="year">Year of Birth</label>
<input type="int" name="year" value="{{ $author->year }}">

<button type="submit" value="save">Submit</button>

</form>


</body>
</html>