<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<body>
    <div class="row">
    <a hreff="{{route('movies.movie_list')}}">Back to list</a>
        <input class="btn btn-raised btn-secondary" type="button">
    </div>
    <label for="title" class="col-md-4">Title</label>
    @foreach ($response['results'] as $title)
        <div>{{$title['title']}}</div>
    @endforeach
</body>
</html>