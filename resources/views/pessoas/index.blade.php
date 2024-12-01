@extends('layouts.base')

@section('content')

    <div class="flex items-start">
        <div class="py-8 mb-5 p-4">
            <a href="{{ url('pessoas/create' )}}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Adicionar Pessoa</a>
        </div>
    </div>



<div class="flex flex-wrap justify-center mt-10">
    @foreach($pessoas as $entity)
        <div class="p-4 max-w-sm">
            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $entity->name }}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $entity->idade }}</span>
                @if(isset($entity->carro))
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $entity->carro->name }}</span>
                @else
                    <span class="text-sm text-gray-500 dark:text-gray-400">Sem carro</span>
                @endif
                <div class="flex mt-4 md:mt-6">
                    <a href="{{ url('pessoas/'.$entity->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</a>
                    <form action="{{ url('pessoas/'.$entity->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Deletar</button>
                </div>
            </div>
        </div>
    @endforeach

    </div>
@endsection

