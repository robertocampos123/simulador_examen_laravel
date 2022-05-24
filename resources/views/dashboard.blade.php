<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bienvenido: {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center h-screen py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container -sm">
                <div class ="row">
                <div>
                <a href="{{ route('profesor.banco') }}" class="btn btn-primary">Banco de Preguntas</a>
                </div>

                <div>
                <a href="/examen_literatura" class="btn btn-primary">Realizar Examen</a>
                </div>
                <div>
                <a href="/resumen" class="btn btn-primary">Calificaciones</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
