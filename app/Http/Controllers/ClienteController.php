<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nome' => 'required', // Garante que o nome não será nulo
        ]);
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

    public function deletar($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente == null) {
            return response()->json([
                'status' => false,
                'message' => 'Cliente não encontrado'
            ]);
        }

        $cliente->delete();

        return response()->json([
            'status' => true,
            'message' => 'Cliente excluído!'
        ]);
    }

    public function index()
    {
        $cliente = Cliente::all();
        return response()->json([
            'status' => true,
            'data' => $cliente
        ]);
    }
}
