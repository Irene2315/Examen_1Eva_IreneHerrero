<x-app-layout> <x-slot name="header">
        <style>
            table,
            tr,
            td {
                border: 2px solid #666;
                padding: 10px;
            }
        </style>

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"> {{ __('Estos son Los Datos De
            Tus Manzanas') }} </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm
        sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> {{ __("Tus manzanas:")
                    }} <div></br></div>

                    <table>
                        <tr>
                            <td>{{ ('Nombre') }}</td>
                            <td>{{ ('id') }}</td>
                            <td>{{ ('tipoManzana') }}</td>
                            <td>{{ ('precioKilo') }}</td>


                            @foreach($manzanas as $m)
                        <tr>
                            <td>{{ $m->nombre }}</td>
                            <td>{{ $m->id }}</td>
                            <td>{{ $m->tipoManzana }}</td>
                            <td>{{ $m->precioKilo}}</td>

                        
                        <td>
                            <form action="{{ route('modificarManzanaFormulario', $m->id) }}" method="GET">
                                @csrf
                                <button type="submit">Modificar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('eliminarManzana', $m->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>

                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>