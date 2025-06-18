<x-layouts.app :title="__('Categorias')">
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Categorías</h2>
    </x-slot>
    <div class="container mx-auto p-4">

        <flux:heading size="xl" class="mb-4">Tipos de Permisos</flux:heading>
        <livewire:tipos-permisos />
    </div>


</x-layouts.app>
