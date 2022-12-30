<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Livewire\Redirector;

class Detail extends Component
{
    public Project $project;

    public function delete(): Redirector
    {
        $this->project->delete();

        return redirect()->to(route("projects.index"));
    }

    public function render(): Renderable
    {
        return view('livewire.project.detail');
    }
}
