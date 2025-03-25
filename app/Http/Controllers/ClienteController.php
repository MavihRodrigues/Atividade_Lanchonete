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
        return response()->json([
            'status' => true,
            'message' => 'Cliente cadastrado!',
            'data' => $cliente
        ]);
        return view('cliente.create');
    }

    public function update(Request $request)
    {
        $cliente = Cliente::find($request->id);
        if ($cliente == null) {
            return response()->json([
                'status' => false,
                'message' => 'Cliente não encontrado'
            ]);
        }

        if (isset($request->nome)) {
            $cliente->nome = $request->nome;
        }

        if (isset($request->endereco)) {
            $cliente->endereco = $request->endereco;
        }

        if (isset($request->telefone)) {
            $cliente->telefone = $request->telefone;
        }

        if (isset($request->cpf)) {
            $cliente->cpf = $request->cpf;
        }

        if (isset($request->email)) {
            $cliente->email = $request->email;
        }

        if (isset($request->senha)) {
            $cliente->senha = $request->senha;
        }

        $cliente->update();

        return response()->json([
            'status' => true,
            'message' => 'Cliente atualizado!'
        ]);
    }
}
