@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('carros') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="modelo" class="block mb-2 text-sm font-medium text-white">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="ano" class="block mb-2 text-sm font-medium text-white">Ano</label>
            <input type="integer" name="ano" id="ano" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="pessoa_id" class="block mb-2 text-sm font-medium text-gray-900">Pessoa</label>
            <select name="pessoa_id" id="coach_id" required>
                <option value="">Selecione a pessoa</option>
                @foreach ($pessoas as $pessoa)
                    <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                @endforeach
            </select>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Criar Carro</button>
    </form>
@endsection


