<x-layouts.app :title="__('Tipos de Permisos')">
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Tipos de permisos</h2>
    </x-slot>
    <div class="container mx-auto p-4">

        <flux:heading size="xl" class="mb-4">Tipos de Permisos</flux:heading>
        <livewire:tipos-permisos />
    </div>


</x-layouts.app>
