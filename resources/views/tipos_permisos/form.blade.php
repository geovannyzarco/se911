@csrf
<div class="mb-4">
    <label for ="tipo" class="block text-sm font-medium text-gray-700">Tipo de Permisos</label>
    <input type="text" name="tipo" id="tipo" value="{{ old('tipo',$tipoPermiso->tipo ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required>
    @error('tipo') <span class="text-danger">{{ $message }}</span> @enderror
</div>
