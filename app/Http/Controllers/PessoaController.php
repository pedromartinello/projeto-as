<?php

namespace App\Http\Controllers;

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
        return view('pessoas.create');
    }
    
    public function store(Request $request)
    {
        Pessoa::create($request->all());
        return redirect('pessoas')->with('success', 'Pessoa created successfully.');
    }
    
    public function edit($id)
    {
        $Pessoa = Pessoa::findOrFail($id);
        return view('pessoas.edit', compact('Pessoa'));
    }
    
    public function update(Request $request, $id)
    {
        $Pessoa = Pessoa::findOrFail($id);
        $Pessoa->update($request->all());
        return redirect('pessoas')->with('success', 'Pessoa updated successfully.');
    }
    
    public function destroy($id)
    {
        $Pessoa = Pessoa::findOrFail($id);
        $Pessoa->delete();
        return redirect('pessoas')->with('success', 'Pessoa deleted successfully.');
    }
}
