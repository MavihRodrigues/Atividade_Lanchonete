<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    protected $rules = [
        'nome' => 'required|max:60|min:1',
        'endereco' => 'required|max:60',
        'telefone' => 'required|max:11',
        'cpf' => 'required|max:11',
        'email' => 'required|email|max:60',
        'senha' => 'required|max:60',
    ];
    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            if (Auth::user()->role === 'cliente') {

                return redirect()->route('clientes.dashboard');
            }
        }
        session()->flash('error', 'Email ou Senha incorretos');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
