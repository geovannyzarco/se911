<<<<<<< HEAD
<div>
    <flux:heading size="lg" class="mb-4">Categorías</flux:heading>

    @if (session()->has('message'))
        <div class="alert alert-success mb-3">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="mb-4">
        <div class="mb-2">
            <label for="categoria" class="block text-sm font-medium text-gray-700">Nombre de Categoría</label>
            <input wire:model.defer="form.categoria_nombre" type="text" id="categoria" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required>
            @error('form.categoria_nombre') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label for="categoria" class="block text-sm font-medium text-gray-700">Horas personales</label>
            <input wire:model.defer="form.h_personales" type="text" id="h_personales" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required>
            @error('form.h_personales') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <flux:button variant="primary" type="submit" >{{ $isEditMode ? 'Actualizar' : 'Crear' }}</flux:button>
        @if ($isEditMode)
           <flux:button variant="danger" type="button" wire:click="resetForm" >Cancelar</flux:button>
        @endif
    </form>

    <flux:heading size="lg" class="mb-4">Lista de Categorías</flux:heading>
    <table class="min-w-full table-auto border border-gray-300">
        <thead class="bg-gray-100 text-gray-700 text-sm font-semibold">
            <tr>
                <th class="px-4 py-2 border-b border-gray-300 text-left">Nombre</th>
                <th class="px-4 py-2 border-b border-gray-300 text-left">Horas Personales</th>
                <th class="px-4 py-2 border-b border-gray-300 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody class="text-sm text-gray-800">
            @foreach($categorias as $categoria)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">{{ $categoria->categoria }}</td>
                    <td class="px-4 py-2 border-b">{{ $categoria->h_personales }}</td>
                    <td class="px-4 py-2 border-b">
                        <flux:button wire:click="edit({{ $categoria->id }})" class="btn btn-sm btn-info">Editar</flux:button>
                        <flux:button variant="danger" wire:click="delete({{ $categoria->id }})" class="btn btn-sm btn-danger">Eliminar</flux:button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
=======
<!-- ... encabezado ... -->

    @if($showForm)
    <form wire:submit.prevent="save" class="space-y-4 mb-6">
        <div class="flex flex-col md:flex-row md:items-center gap-4">
            <label class="w-full md:w-1/4 text-sm font-medium">Nombre de Categoría</label>
            <div class="w-full md:w-3/4">
                <input wire:model.defer="form.categoria_nombre" type="text"
                       class="w-full px-4 py-2 border rounded shadow-sm focus:outline-none focus:ring"
                       placeholder="Ej. Personal Administrativo">
                @error('form.categoria_nombre')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="flex flex-col md:flex-row md:items-center gap-4">
            <label class="w-full md:w-1/4 text-sm font-medium">Horas Personales</label>
            <div class="w-full md:w-3/4">
                <input wire:model.defer="form.h_personales" type="number"
                       class="w-full px-4 py-2 border rounded shadow-sm focus:outline-none focus:ring"
                       placeholder="Ej. 24">
                @error('form.h_personales')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="flex items-center gap-4 mt-4">
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                {{ $isEditMode ? 'Actualizar' : 'Guardar' }}
            </button>
            <button type="button" wire:click="resetForm"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Cancelar
            </button>
        </div>
    </form>
    @endif

<!-- ... tabla ... -->
>>>>>>> 74b9d32aba8160aefcc3884eb4b533601e3528e0
