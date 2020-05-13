@extends ('layouts.app')
    <!DOCTYPE html>
@section('content')
    <div class="flex items-center">
        <a href="/projects/create">Create New Project</a>
    </div>
    <ul>
        @forelse ($projects as $project)
            <li>
                <a href="{{$project->path()}}">{{$project->title}}</a>
            </li>
        @empty
            <li>No projects yet.</li>
        @endforelse
    </ul>
@endsection
