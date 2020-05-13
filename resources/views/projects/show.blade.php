@extends ('layouts.app')
    <!DOCTYPE html>
@section('content')
    <h1>{{$project->title}}</h1>
    <div>{{$project->description}}</div>

@endsection
