<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clientes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //\App\Models\Clientes::factory(10)->create();

        
        // // Manual
        //  Clientes::factory()->create([
        //      'nome' => 'Julio',
        //      'cpf' => '12345678900',
        //      'telefone' => '15123456789',
        //      'reserva' => 9,
        //  ]);

        // User::factory()->create([
        //     'name' => 'Confeccao Julio',
        //     'email' => 'confeccao@exemplo.com.br',
        // ]);

        // \App\Models\Pedidos::factory(10)->create();
        // \App\Models\Fornecedores::factory(10)->create();
        // \App\Models\Estoque::factory(10)->create();
        \App\Models\Produto2::factory(10)->create();

    }
}
