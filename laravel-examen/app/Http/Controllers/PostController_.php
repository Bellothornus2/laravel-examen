<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('posts.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
        return view('posts.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('posts.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        Project::create( $request->validated() );

        return redirect()->route('posts.index')->with('status', 'El proyecto fue creado con éxito');
    }

    public function edit(Project $project)
    {
        return view('posts.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update( $request->validated() );

        return redirect()->route('posts.show', $project)->with('status', 'El proyecto fue actualizado con éxito.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('posts.index')->with('status', 'El proyecto fue eliminado con éxito.');
    }
}