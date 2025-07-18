<div class="p4">
    <h1 class="text-xl font-bold mb-4">Empleados</h1>
    @if ($empleadoSeleccionado)
        @livewire('solicitudes.detalle', ['empleadoId'=>$empleadoSeleccionado])
    @else
        <table class="w-full table-auto border">
            <thead  class="bg-gray-100">
                <th class="p-2 border">codigo</th>
                <th class="p-2 border">Nombre</th>
                <th class="p-2 border">Acciones</th>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td class="p-2 border">{{ $empleado->codigo }}</td>
                        <td class="p-2 border">{{ $empleado->nombre }}</td>
                        <td class="p-2 border">
                            <flux:button variant="primary" wire:click="verEstado({{ $empleado->id }})"
                                class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                Ver Estado
                            </flux:button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $empleados->links() }}
    @endif
</div>
