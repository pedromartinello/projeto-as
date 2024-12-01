<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }
    
    public function create()
    {
        return view('pedidos.create');
    }
    
    public function store(Request $request)
    {
        Pedido::create($request->all());
        return redirect('pedidos')->with('success', 'Pedido created successfully.');
    }
    
    public function edit($id)
    {
        $Pedido = Pedido::findOrFail($id);
        return view('pedidos.edit', compact('Pedido'));
    }
    
    public function update(Request $request, $id)
    {
        $Pedido = Pedido::findOrFail($id);
        $Pedido->update($request->all());
        return redirect('pedidos')->with('success', 'Pedido updated successfully.');
    }
    
    public function destroy($id)
    {
        $Pedido = Pedido::findOrFail($id);
        $Pedido->delete();
        return redirect('pedidos')->with('success', 'Pedido deleted successfully.');
    }
}
