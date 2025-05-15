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
