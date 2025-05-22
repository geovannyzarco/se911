@props(['categoria'])

<div class="bg-white shadow-lg rounded-2xl p-6 max-w-2xl mx-auto">
    <form method="POST" action="{{ $categoria ? route('categorias.update', $categoria) : route('categorias.store') }}">
        @csrf
        @if ($categoria)
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
            <input
                type="text"
                name="categoria"
                id="categoria"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('categoria', $categoria->categoria ?? '') }}"
                required
            >
            @error('categoria')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="h_personales" class="block text-sm font-medium text-gray-700">Horas personales</label>
            <input
                type="number"
                name="h_personales"
                id="h_personales"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('h_personales', $categoria->h_personales ?? '') }}"
                required
            >
            @error('h_personales')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-2 mt-6">
            <flux:button href="{{ route('categorias.index') }}" variant="danger">Cancelar</flux:button>

            <flux:button variant="primary" type="submit"> {{ $categoria ? 'Actualizar' : 'Guardar' }}</flux:button>

        </div>
    </form>
</div>
