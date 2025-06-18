<x-layouts.app :title="__('Categorias')">
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Editar Categoría</h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8 max-w-xl mx-auto">
        <form method="POST" action="{{ route('categorias.update', $categoria) }}" class="space-y-4 bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Nombre de la Categoría</label>
                <input type="text" name="categoria" value="{{ old('categoria', $categoria->categoria) }}"
                       class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring focus:ring-blue-200"
                       required>
                @error('categoria') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Horas Personales</label>
                <input type="number" name="h_personales" value="{{ old('h_personales', $categoria->h_personales) }}"
                       class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                @error('h_personales') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div class="flex justify-end gap-2">
                <flux:button variant="danger" href="{{ route('categorias.index') }}" >Cancelar</flux:button>
                <flux:button variant="primary" type="submit"
                        class="bg-blue-600  px-4 py-2 rounded hover:bg-blue-700">
                    Actualizar
                </flux:button>
            </div>
        </form>
    </div>
</x-layouts.app>
