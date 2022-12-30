<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(): Renderable
    {
        return view('projects.index');
    }

    public function create(): Renderable
    {
        $project = new Project;
        $title = __('Crear proyecto');
        $buttonText = __('Crear proyecto');
        return view('projects.form', compact('project', 'title', 'buttonText'));
    }

    public function show(Project $project): Renderable
    {
        $project->load('user:id,name');
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project): Renderable
    {
        $title = __('Editar proyecto');
        $buttonText = __('Actualizar proyecto');
        return view('projects.form', compact('project', 'title', 'buttonText'));
    }
}
