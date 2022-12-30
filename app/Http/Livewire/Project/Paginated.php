<?php

namespace App\Http\Livewire\Project;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use App\Models\Project;
use Livewire\WithPagination;

class Paginated extends Component
{
    use WithPagination;

    public function delete(Project $project): void
    {
        $project->delete();
    }

    public function render(): Renderable
    {
        $projects = Project::latest()->paginate();
        return view('livewire.project.paginated', compact('projects'));
    }
}
