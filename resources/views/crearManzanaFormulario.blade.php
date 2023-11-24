<x-app-layout>

    <h1>Nuevo Coche</h1>

    <form method="post" action="{{ route('anadirManzana') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="tipoManzana">tipoManzana:</label>
        <input type="text" name="tipoManzana" id="tipoManzana" required>

        <label for="precioKilo">precioKilo":</label>
        <input type="text" name="precioKilo" id="precioKilo" required>


        <button type="submit">Guardar</button>
    </form>
</x-app-layout>