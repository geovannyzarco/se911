<x-layouts.app :title="__('Editar Tipo de Permiso')">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow-md">
        <h1 class="text-xl font-semibold mb-4">Editar Tipo de Permiso</h1>

        <form action="{{ route('tipos-permisos.update', $tipoPermiso) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Incluir el formulario reutilizable --}}
            @include('tipos_permisos.form', ['tipoPermiso' => $tipoPermiso])

            <div class="flex gap-2 mt-4">
                <flux:button type="submit" variant="primary"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Actualizar
                </flux:button>
                <flux:button href="{{ route('tipos-permisos.index') }}"
                   class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Cancelar</flux:button>
            </div>
        </form>
    </div>
</x-layouts.app>
