<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Livewire\Redirector;

class Form extends Component
{
    public Project $project;

    public string $buttonText;

    public function rules(): array
    {
        return [
            'project.name' => 'required|string|max:255|unique:projects,name,' . request()->route('project'),
            'project.description' => 'required|string|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'project.name.required' => __('El campo nombre es obligatorio.'),
            'project.name.string' => __('El campo nombre debe ser una cadena de texto.'),
            'project.name.max' => __('El campo nombre no debe ser mayor a :max caracteres.'),
            'project.name.unique' => __('El campo nombre ya está en uso.'),
            'project.description.required' => __('El campo descripción es obligatorio.'),
            'project.description.string' => __('El campo descripción debe ser una cadena de texto.'),
            'project.description.max' => __('El campo descripción no debe ser mayor a :max caracteres.'),
        ];
    }

    public function save(): Redirector
    {
        $this->validate();

        $this->project->save();

        return redirect()->to(route("projects.index"));
    }

    public function render(): Renderable
    {
        return view('livewire.project.form');
    }
}
