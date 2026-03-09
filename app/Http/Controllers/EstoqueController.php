<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;

class EstoqueController extends Controller
{
    public function index() {
        $estoque = \App\Models\Estoque::all();
        return view('estoque.index', compact('estoque'));
}

    public function create(){
        return view('estoque.create');
    }

    public function store(Request $request){
        $request->validate([
            'idEstoque' => 'required|string|max:255',
            'quantidade' => 'required|int|unique:estoques',
        ]);

        Estoque::create($request->all());

        return redirect()->route('estoque.index')->with('success', 'Produto cadastrado no estoque com sucesso!');
    }
}
