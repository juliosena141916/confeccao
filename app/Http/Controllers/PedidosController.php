<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;

class PedidosController extends Controller
{
    public function index() {
    $pedidos = \App\Models\Pedidos::all();
    return view('pedidos.index', compact('pedidos'));
}

public function create(){
        return view('pedidos.create');
    }

    public function store(Request $request){
        $request->validate([
            'idPedido' => 'required|string|max:255',
            'valorPedido' => 'required|int|unique:pedidos',
        ]);

        Estoque::create($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido cadastrado com sucesso!');
    }
}
