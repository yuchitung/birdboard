<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Birdboard</h1>

<ul>
    @foreach ($projects as $project)
        <li>
            <a href="{{$project->path()}}">{{$project->title}}</a>
        </li>
    @endforeach
</ul>
</body>
</html>
