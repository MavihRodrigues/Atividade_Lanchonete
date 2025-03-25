<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function cadastrar(Request $request)
    {
        $produto = Produto::create([
            'nome' => $request->nome,
            'ingredientes' => $request->ingredientes,
            'valor' => $request->valor,
            'imagem_produto' => $request->imagem_produto
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Produto cadastrado!',
            'data' => $produto
        ]);
    }
}
