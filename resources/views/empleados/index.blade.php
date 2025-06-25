<x-layouts.app :title="__('Empleados')">
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Grupos</h2>
    </x-slot>
    <div class="container mx-auto p-4">

        <flux:heading size="xl" class="mb-4">Grupos</flux:heading>
        <livewire:Empleados />
    </div>


</x-layouts.app>
