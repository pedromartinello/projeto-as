@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('pedidos/'.$pedido->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="codigo" class="block mb-2 text-sm font-medium text-white">Codigo</label>
            <input type="integer" name="codigo" id="codigo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Salvar Pedido</button>
    </form>

@endsection