<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cadastrar(Request $request)
    {
        $cliente = Cliente::create([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'senha' => $request->senha
        ]);
        return view('cliente.create');
    }
}
