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
        $request->validate([
            'codigo' => 'required|integer'
        ]);

        Pedido::create($request->only('codigo'));
        return redirect('pedidos')->with('success', 'Pedido criado com sucesso.');
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required|integer'
        ]);

        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->only('codigo'));
        return redirect('pedidos')->with('success', 'Pedido atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect('pedidos')->with('success', 'Pedido deletado com sucesso.');
    }
}
