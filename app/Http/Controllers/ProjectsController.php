<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        if (auth()->id() !== (int)$project->owner_id) {
            abort(403);
        }
        return view('projects.show', compact('project'));
    }

    public function store()
    {
        auth()->user()->projects()->create(request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]));

        return redirect('/projects');
    }
}
