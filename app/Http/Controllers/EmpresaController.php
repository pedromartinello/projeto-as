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
        Empresa::create($request->all());
        return redirect('empresas')->with('success', 'Empresa created successfully.');
    }
    
    public function edit($id)
    {
        $Empresa = Empresa::findOrFail($id);
        return view('empresas.edit', compact('Empresa'));
    }
    
    public function update(Request $request, $id)
    {
        $Empresa = Empresa::findOrFail($id);
        $Empresa->update($request->all());
        return redirect('empresas')->with('success', 'Empresa updated successfully.');
    }
    
    public function destroy($id)
    {
        $Empresa = Empresa::findOrFail($id);
        $Empresa->delete();
        return redirect('empresas')->with('success', 'Empresa deleted successfully.');
    }
}
