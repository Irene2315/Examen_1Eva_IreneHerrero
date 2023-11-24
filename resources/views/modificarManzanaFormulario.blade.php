<x-app-layout>
    <h1>Modificar Coche</h1>

    <form method="post" action="{{ route('actualizarManzana', $manzanaModificar->id) }}">
        @csrf
        @method('PUT') {{-- Use PUT method for updating data --}}

        <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $manzanaModificar->nombre}}" readonly>

        <label for="tipoManzana">tipoManzana:</label>
        <input type="text" name="tipoManzana" id="tipoManzana" value="{{ $manzanaModificar->tipoManzana}}" required>

        <label for="precioKilo">precioKilo:</label>
        <input type="text" name="precioKilo" id="precioKilo" value="{{ $manzanaModificar->precioKilo }}" required>

        <input type="hidden" name="id" id="id" value="{{ $manzanaModificar->id }}" required>

        <button type="submit">Guardar</button>
    </form>
</x-app-layout>