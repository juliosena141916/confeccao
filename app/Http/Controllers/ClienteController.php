<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClienteController extends Controller
{
    //
    public function index() {
        $clientes = \App\Models\Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|unique:clientes',
            'reserva' => 'required|string',
            'telefone' => 'required|string',
        ]);

        Clientes::create($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function edit(Clientes $cliente){
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Clientes $cliente){
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|unique:clientes,cpf,' . $cliente->id,
            'reserva' => 'required|string',
            'telefone' => 'required|string',
        ]);

        $cliente->update($request->only(['nome', 'cpf', 'reserva', 'telefone']));
        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado!');
    }

    public function destroy(Clientes $cliente){
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente removido!');
    }
}