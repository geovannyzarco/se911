<div class="p-6">
    <div class="flex justify-end mb-4">
        <flux:button variant="primary" wire:click="openModal" class="bg-blue-600 text-white px-4 py-2 rounded">
            Agregar nuevo
        </flux:button>
    </div>

    {{-- Tabla --}}
    <div class="overflow-x-auto bg-white shadow rounded mb-4">
        <table class="w-full border text-sm ">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border p-2">ID</th>
                        <th class="border p-2">Unidad</th>
                        <th class="border p-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $item)
                        <tr>
                            <td class="border p-2">{{ $item->id }}</td>
                            <td class="border p-2">{{ $item->unidad }}</td>
                            <td class="border p-2">
                                <flux:button wire:click="openModal('editar', {{ $item->id }})" class="text-blue-600 mr-2">Editar</flux:button>
                                <flux:button variant="danger" wire:click="delete({{ $item->id }})" class="text-red-600">Eliminar</flux:button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
{{ $registros->links('pagination::tailwind') }}

    {{-- Modal --}}
    @if($showModal)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded shadow-lg w-full max-w-md p-6 relative">
                <h2 class="text-lg font-bold mb-4">
                    {{ $editing ? 'Editar Tipo de Permiso' : 'Nuevo Unidad' }}
                </h2>

                <form wire:submit.prevent="save" class="space-y-4">
                    <div>
                        <label class="block font-semibold">Tipo</label>
                        <input type="text" wire:model.defer="form.unidad" class="w-full border rounded p-2" />
                        @error('form.unidad') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-end space-x-2">
                        <flux:button type="button" wire:click="closeModal" class="px-4 py-2 border rounded">
                            Cancelar
                        </flux:button>
                        <flux:button variant="primary" type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                            {{ $editing ? 'Actualizar' : 'Guardar' }}
                        </flux:button>
                    </div>
                </form>
            </div>
        </div>
    @endif

</div>
