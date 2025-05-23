<x-layouts.app :title="__('Categorias')">
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Categorías</h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">

        <flux:button href="{{ route('categorias.create') }}" class="mb-4">+ Nueva Categoría</flux:button>


        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white shadow rounded">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Categoría</th>
                        <th class="px-4 py-2">Horas Personales</th>
                        <th class="px-4 py-2 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $categoria->id }}</td>
                            <td class="px-4 py-2">{{ $categoria->categoria }}</td>
                            <td class="px-4 py-2">{{ $categoria->h_personales }}</td>
                            <td class="px-4 py-2 text-center space-x-2">
                                <a href="{{ route('categorias.edit', $categoria) }}"
                                   class="text-blue-600 hover:underline">Editar</a>
                                <form action="{{ route('categorias.destroy', $categoria) }}"
                                      method="POST" class="inline"
                                      onsubmit="return confirm('¿Eliminar esta categoría?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if ($categorias->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center px-4 py-4 text-gray-500">
                                No hay categorías registradas.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
