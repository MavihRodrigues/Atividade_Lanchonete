<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cliente extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([
            'nome' => 'Joao',
            'endereco' => 'rua sao paulo, 12-34',
            'telefone' => '12345678910',
            'cpf' => '1234567891011',
            'email' => 'joao@silva.com',
            'senha' => '123456'
        ]);
    }
}
