<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }
    
    public function create()
    {
        return view('livros.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ]);
        
        Livro::create($request->all());
        return redirect('livros')->with('success', 'Livro created successfully.');
    }
    
    public function edit($id)
    {
        $Livro = Livro::findOrFail($id);
        return view('livros.edit', compact('Livro'));
    }
    
    public function update(Request $request, $id)
    {
        $Livro = Livro::findOrFail($id);
        $Livro->update($request->all());
        return redirect('livros')->with('success', 'Livro updated successfully.');
    }
    
    public function destroy($id)
    {
        $Livro = Livro::findOrFail($id);
        $Livro->delete();
        return redirect('livros')->with('success', 'Livro deleted successfully.');
    }
}
