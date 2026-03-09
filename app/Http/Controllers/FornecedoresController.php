<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedores;

class FornecedoresController extends Controller
{
    public function index() {
    $fornecedores = \App\Models\Fornecedores::all();
    return view('fornecedores.index', compact('fornecedores'));
}

public function create(){
        return view('fornecedores.create');
    }

    public function store(Request $request){
        $request->validate([
            'idFornecedor' => 'required|string|max:255',
            'enderecoFornecedor' => 'required|int|unique:fornecedores',
            'telefoneFornecedor' => 'required|string|unique:fornecedores'
        ]);

        Estoque::create($request->all());

        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor cadastrado com sucesso!');
    }
}
