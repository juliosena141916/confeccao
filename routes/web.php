<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\Produto2Controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/estoque', [EstoqueController::class, 'index'])->name('estoque.index');
Route::get('/fornecedores', [FornecedoresController::class, 'index'])->name('fornecedores.index');
Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');
Route::get('/produto2', [Produto2Controller::class, 'index'])->name('produto2.index');

route::get('/Clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
route::post('/Clientes', [ClienteController::class, 'store'])->name('clientes.store');

route::get('/Estoque/create', [EstoqueController::class, 'create'])->name('estoque.create');
route::post('/Estoque', [EstoqueController::class, 'store'])->name('estoque.store');

route::get('/Fornecedores/create', [FornecedoresController::class, 'create'])->name('fornecedores.create');
route::post('/Fornecedores', [FornecedoresController::class, 'store'])->name('fornecedores.store');

route::get('/Pedidos/create', [PedidosController::class, 'create'])->name('pedidos.create');
route::post('/Pedidos', [PedidosController::class, 'store'])->name('pedidos.store');

route::get('/Produto2/create', [Produto2Controller::class, 'create'])->name('produto2.create');
route::post('/Produto2', [Produto2Controller::class, 'store'])->name('produto2.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
