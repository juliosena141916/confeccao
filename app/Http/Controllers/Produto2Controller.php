<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto2Controller extends Controller
{
    public function index() {
    $produto2= \App\Models\Produto2::all();
    return view('produto2.index', compact('produto2'));
}
}
