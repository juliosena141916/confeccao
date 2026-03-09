<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto2;

class Produto2Controller extends Controller
{
    public function index() {
    $produto2= \App\Models\Produto2::all();
    return view('produto2.index', compact('produto2'));
}

public function create(){
        return view('produto2.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|int|unique:produto2',
            'quantidade' => 'required|int|unique:produto2'
        ]);

        Estoque::create($request->all());

        return redirect()->route('produto2.index')->with('success', 'Produto cadastrado com sucesso!');
    }
}
