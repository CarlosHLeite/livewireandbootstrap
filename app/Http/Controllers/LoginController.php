<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /* Função para logar o usuario */
    public function loginview() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
            return redirect('/order/general-services');
        } else {
            return redirect('/')->with('error', 'Usuário ou senha inválidos');
        }
    }

    /* Redireciona o funcionario para pagina de Esqueci minha senha */
    public function forgotPassword() {
        return view('auth.forgot-password');
    }

    /* Função para deslogar o funcionario*/
    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    /* Função para o usuario ir para a pagina de perfil */
    public function profile() {
        return view('auth.profile');
    }

    /* Função paradirecionar o usuario para a pagina de configuração */
    public function settings(){
        return view('auth.settings');
    }

    public function index() {
        return view('auth.register');
    }
 
}
