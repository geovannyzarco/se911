<x-layouts.app :title="__('Dashboard')">
    @if (session('message'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4" >{{ session('message') }}</div>
    @endif


    <flux:button  href="{{ route('tipos-permisos.create')  }}" variant="primary" class=" mb-4">Agregar</flux:button>

    <table class="w-full table-auto border-collapse mb-4">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2 text-left">ID</th>
                <th class="border px-4 py-2 text-left">Tipo</th>
                <th class="border px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipos as $tipo)
                <tr>
                    <td class="border px-4 py-2 text-center">{{ $tipo->id }}</td>
                    <td class="border px-4 py-2">{{ $tipo->tipo }}</td>
                    <td class="border px-4 py-2 text-center">
                        <flux:button  href="{{ route('tipos-permisos.edit', $tipo) }}" class="text-blue-500 ">Editar</flux:button>

                        <form action="{{ route('tipos-permisos.destroy', $tipo) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <flux:button variant="danger" class="btn btn-sm btn-danger">Eliminar</flux:button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<!-- Paginación -->
<div class="mt-4">
    {{ $tipos->links() }}
</div>
</x-layouts.app>
