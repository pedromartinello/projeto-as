<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.index', compact('pessoas'));
    }

    public function create()
    {
        $carros = Carro::all();
        return view('pessoas.create', compact('carros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer',
        ]);

        Pessoa::create($request->all());
        return redirect('pessoas')->with('success', 'Pessoa criada com sucesso.');
    }

    public function edit($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $carros = Carro::all();
        return view('pessoas.edit', compact('pessoa', 'carros'));
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());
        return redirect('pessoas')->with('success', 'Pessoa atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return redirect('pessoas')->with('success', 'Pessoa deletada com sucesso.');
    }
}
