<div class="p-6 bg-white border-b border-gray-200">

    <div class="flex justify-between">
        <h1 class="text-2xl font-bold">{{ __('Proyectos') }}</h1>
        <a href="{{ route('projects.create') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Crear proyecto</a>
    </div>

    <div class="mt-4">
        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                <tr>
                    <th class="px-4 py-2">{{ __('Nombre') }}</th>
                    <th class="px-4 py-2">{{ __('Descripción') }}</th>
                    <th class="px-4 py-2">{{ __('Acciones') }}</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
                @forelse ($projects as $project)
                    <tr>
                        <td class="border px-4 py-2">{{ $project->name }}</td>
                        <td class="border px-4 py-2">{{ $project->description }}</td>
                        <td class="border px-4 py-4" style="width: 260px">
                            <a href="{{ route('projects.show', $project) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Ver') }}</a>
                            <a href="{{ route('projects.edit', $project) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Editar') }}</a>
                            <a role="button" wire:click.prevent="delete('{{ $project->id }}')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">{{ __('Eliminar') }}</a>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-red-400 text-white text-center">
                        <td colspan="3" class="border px-4 py-2">{{ __('No hay proyectos para mostrar') }}</td>
                    </tr>
                @endforelse
            </tbody>
            @if ($projects->hasPages())
                <tfoot class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                    <tr>
                        <td colspan="3" class="border px-4 py-2">
                            {{ $projects->links() }}
                        </td>
                    </tr>
                </tfoot>
            @endif
        </table>
    </div>
</div>
