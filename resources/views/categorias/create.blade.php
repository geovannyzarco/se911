<x-layouts.app :title="__('Categorias')">
<x-categoria-form />

<<<<<<< HEAD
=======
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Nueva Categoría</h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8 max-w-xl mx-auto">
        <form method="POST" action="{{ route('categorias.store') }}" class="space-y-4 bg-white p-6 rounded shadow">
            @csrf



            <div>
                <label class="block text-sm font-medium text-gray-700">Nombre de la Categoría</label>
                <input type="text" name="categoria" value="{{ old('categoria') }}"
                       class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring focus:ring-blue-200"
                       required>
                @error('categoria') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Horas Personales</label>
                <input type="number" name="h_personales" value="{{ old('h_personales') }}"
                       class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                @error('h_personales') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div class="flex justify-end gap-2">

                <flux:button variant="danger" href="{{ route('categorias.index') }}" class="mb-4">Cancelar</flux:button>
                <flux:button variant="primary" type="submit" class="mb-4">Guardar</flux:button>

            </div>
        </form>
    </div>
>>>>>>> b489f21e4ce9a8a57df02ea44a30da9322abb51b
</x-layouts.app>
