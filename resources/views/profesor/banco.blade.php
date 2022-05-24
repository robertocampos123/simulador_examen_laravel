
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Banco de Preguntas') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center h-screen py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="container -sm">
            <div class ="row">
            <div>
            <a href="/tema" class="btn btn-primary">Literatura</a>
            </div>
            <div>
            <a href="/matematicas" class="btn btn-success">Matemáticas</a>
            </div>
            <div>
            <a href="/ciencias" class="btn btn-info">Ciencias</a>
            </div>
            </div>
              </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
