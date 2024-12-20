@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('animals/'.$animal->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-white">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $animal->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="especie" class="block mb-2 text-sm font-medium text-white">Especie</label>
            <input type="text" name="especie" id="especie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Salvar Animal</button>
    </form>

@endsection