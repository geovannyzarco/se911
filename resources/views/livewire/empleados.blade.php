
    <div class="p-6">
    <div class="flex justify-end mb-4">
        <flux:button variant="primary" wire:click="openModal" class="bg-blue-600 text-white px-4 py-2 rounded">
            Agregar nuevo
        </flux:button>
    </div>

    <table class="w-full border text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-2">Código</th>
                <th class="border p-2">Nombre</th>
                <th class="border p-2">Categoría</th>
                <th class="border p-2">Estado</th>
                <th class="border p-2">Unidad</th>
                <th class="border p-2">Grupo</th>
                <th class="border p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $empleado)
                <tr>
                    <td class="border p-2">{{ $empleado->codigo }}</td>
                    <td class="border p-2">{{ $empleado->nombre }}</td>
                    <td class="border p-2">{{ $empleado->categoria->categoria ?? '-' }}</td>
                    <td class="border p-2">{{ $empleado->estadoEmpleado->estado ?? '-' }}</td>
                    <td class="border p-2">{{ $empleado->unidad->unidad ?? '-' }}</td>
                    <td class="border p-2">{{ $empleado->grupo->grupo ?? '-' }}</td>
                    <td class="border p-2">
                        <flux:button wire:click="openModal('editar', {{ $empleado->id }})" class="text-blue-600">Editar</flux:button>
                        <flux:button variant="danger" wire:click="delete({{ $empleado->id }})" class="text-red-600 ml-2">Eliminar</flux:button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $registros->links() }}

    @if($showModal)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded shadow-lg w-full max-w-2xl p-6">
                <h2 class="text-lg font-bold mb-4">{{ $editing ? 'Editar Empleado' : 'Nuevo Empleado' }}</h2>

                <form wire:submit.prevent="save" class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block">Código</label>
                        <input type="text" wire:model.defer="form.codigo" class="w-full border rounded p-2">
                        @error('form.codigo') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block">Nombre</label>
                        <input type="text" wire:model.defer="form.nombre" class="w-full border rounded p-2">
                        @error('form.nombre') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block">Categoría</label>
                        <select wire:model.defer="form.id_categoria" class="w-full border rounded p-2">
                            <option value="">Seleccione</option>
                            @foreach($categorias as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->categoria }}</option>
                            @endforeach
                        </select>
                        @error('form.id_categoria') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block">Estado</label>
                        <select wire:model.defer="form.id_estado_empleado" class="w-full border rounded p-2">
                            <option value="">Seleccione</option>
                            @foreach($estados as $estado)
                                <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
                            @endforeach
                        </select>
                        @error('form.id_estado_empleado') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block">Unidad</label>
                        <select wire:model.defer="form.id_unidad" class="w-full border rounded p-2">
                            <option value="">Seleccione</option>
                            @foreach($unidades as $u)
                                <option value="{{ $u->id }}">{{ $u->unidad }}</option>
                            @endforeach
                        </select>
                        @error('form.id_unidad') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block">Grupo</label>
                        <select wire:model.defer="form.id_grupo" class="w-full border rounded p-2">
                            <option value="">Seleccione</option>
                            @foreach($grupos as $g)
                                <option value="{{ $g->id }}">{{ $g->grupo }}</option>
                            @endforeach
                        </select>
                        @error('form.id_grupo') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-span-2 flex justify-end space-x-2 mt-4">
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


