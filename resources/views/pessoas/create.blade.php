@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('pessoas') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5">
            <label for="idade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Idade</label>
            <input type="integer" name="idade" id="idade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5">
            <label for="carro_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carro</label>
            <select name="carro_id" id="coach_id" required>
                <option value="">Selecione o carro</option>
                @foreach ($carros as $carro)
                    <option value="{{ $carro->id }}">{{ $carro->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Create Pessoa</button>
    </form>
@endsection


