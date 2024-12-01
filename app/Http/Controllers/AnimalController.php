<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animais = Animal::all();
        return view('animais.index', compact('animais'));
    }
    
    public function create()
    {
        return view('animais.create');
    }
    
    public function store(Request $request)
    {
        Animal::create($request->all());
        return redirect('animais')->with('success', 'Animal created successfully.');
    }
    
    public function edit($id)
    {
        $Animal = Animal::findOrFail($id);
        return view('animais.edit', compact('Animal'));
    }
    
    public function update(Request $request, $id)
    {
        $Animal = Animal::findOrFail($id);
        $Animal->update($request->all());
        return redirect('animais')->with('success', 'Animal updated successfully.');
    }
    
    public function destroy($id)
    {
        $Animal = Animal::findOrFail($id);
        $Animal->delete();
        return redirect('animais')->with('success', 'Animal deleted successfully.');
    }
}
