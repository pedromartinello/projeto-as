<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }
    
    public function create()
    {
        return view('empresas.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);
        
        Empresa::create($request->all());
        return redirect('empresas')->with('success', 'Empresa created successfully.');
    }
    
    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('empresas.edit', compact('empresa'));
    }
    
    public function update(Request $request, $id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());
        return redirect('empresas')->with('success', 'Empresa updated successfully.');
    }
    
    public function destroy($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();
        return redirect('empresas')->with('success', 'Empresa deleted successfully.');
    }
}
