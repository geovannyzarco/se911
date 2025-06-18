<div class="p-6">
    <div class="flex justify-end mb-4">
        <flux:button variant="primary" wire:click="openModal" class="bg-blue-600 text-white px-4 py-2 rounded">
            Agregar nuevo
        </flux:button>
    </div>

    <table class="w-full border text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-2">ID</th>
                <th class="border p-2">Grupo</th>
                <th class="border p-2">Límite</th>
                <th class="border p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $item)
                <tr>
                    <td class="border p-2">{{ $item->id }}</td>
                    <td class="border p-2">{{ $item->grupo }}</td>
                    <td class="border p-2">{{ $item->limite_permisos }}</td>
                    <td class="border p-2">
                        <flux:button wire:click="openModal('editar', {{ $item->id }})" class="text-blue-600">Editar</flux:button>
                        <flux:button variant="danger" wire:click="delete({{ $item->id }})" class="text-red-600 ml-2">Eliminar</flux:button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $registros->links() }}

    @if($showModal)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded shadow-lg w-full max-w-md p-6">
                <h2 class="text-lg font-bold mb-4">
                    {{ $editing ? 'Editar Grupo' : 'Nuevo Grupo' }}
                </h2>

                <form wire:submit.prevent="save" class="space-y-4">
                    <div>
                        <label class="block font-semibold">Grupo</label>
                        <input type="text" wire:model.defer="form.grupo" class="w-full border rounded p-2" />
                        @error('form.grupo') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block font-semibold">Límite de Permisos</label>
                        <input type="number" wire:model.defer="form.limite_permisos" class="w-full border rounded p-2" />
                        @error('form.limite_permisos') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-end space-x-2">
                        <flux:button type="button" wire:click="closeModal" class="px-4 py-2 border rounded">Cancelar</flux:button>
                        <flux:button variant="primary" type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                            {{ $editing ? 'Actualizar' : 'Guardar' }}
                        </flux:button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>

