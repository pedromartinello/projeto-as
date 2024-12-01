<?php

namespace App\Http\Controllers;

use App\Models\Carro;
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
        return view('carros.create');
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
        $Carro = Carro::findOrFail($id);
        return view('carros.edit', compact('Carro'));
    }
    
    public function update(Request $request, $id)
    {
        $Carro = Carro::findOrFail($id);
        $Carro->update($request->all());
        return redirect('carros')->with('success', 'Carro updated successfully.');
    }
    
    public function destroy($id)
    {
        $Carro = Carro::findOrFail($id);
        $Carro->delete();
        return redirect('carros')->with('success', 'Carro deleted successfully.');
    }
}
