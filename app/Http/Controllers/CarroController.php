<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }
    
    public function create()
    {
        $pessoas = Pessoa::all();
        return view('carros.create', compact('pessoas'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer'
        ]);
        
        Carro::create($request->all());
        return redirect('carros')->with('success', 'Carro created successfully.');
    }
    
    public function edit($id)
    {
        $carro = Carro::findOrFail($id);
        return view('carros.edit', compact('carro'));
    }
    
    public function update(Request $request, $id)
    {
        $carro = Carro::findOrFail($id);
        $carro->update($request->all());
        return redirect('carros')->with('success', 'Carro updated successfully.');
    }
    
    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();
        return redirect('carros')->with('success', 'Carro deleted successfully.');
    }
}
