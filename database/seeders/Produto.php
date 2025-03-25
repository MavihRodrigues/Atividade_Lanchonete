<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Produto extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produto')->insert([
            'nome' => 'aaa',
            'ingredientes' => 'bbb',
            'produtos' => 'ccc',
            'imagem_produto' => 'ddd'
        ]);
    }
}
