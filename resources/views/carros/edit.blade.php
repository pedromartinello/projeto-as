@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('carros/'.$carro->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="modelo" class="block mb-2 text-sm font-medium text-white">Modelo</label>
            <input type="text" name="modelo" id="modelo" value="{{ $carro->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="ano" class="block mb-2 text-sm font-medium text-white">Ano</label>
            <input type="text" name="ano" id="ano" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Salvar Carro</button>
    </form>

@endsection