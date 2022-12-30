<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del proyecto') }}
        </h2>
    </x-slot>

    <livewire:project.detail :project="$project" />
</x-app-layout>
