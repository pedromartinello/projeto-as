<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }
    
    public function create()
    {
        return view('animals.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
        ]);
        
        Animal::create($request->all());
        return redirect('animals')->with('success', 'Animal created successfully.');
    }
    
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animals.edit', compact('animal'));
    }
    
    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());
        return redirect('animals')->with('success', 'Animal updated successfully.');
    }
    
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect('animals')->with('success', 'Animal deleted successfully.');
    }
}
