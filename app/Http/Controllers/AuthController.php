<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use JWTAuth;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Obter as credenciais do formulário de login
        $credentials = $request->only('email', 'password');

        try {
            // Tentar gerar o token JWT com as credenciais fornecidas
            if (!$token = JWTAuth::attempt($credentials)) {
                $errors = ['Credenciais inválidas.'];
                return redirect()->back()->withErrors($errors);
            }
        } catch (JWTException $e) {
            // Lidar com exceções JWT
            return redirect()->back()->withErrors($errors);
        }

        // Obter os dados do usuário logado
        $user = User::where('email', $request->email)->first();

        // Gerar o token JWT para o usuário
        $token = JWTAuth::fromUser($user);

        // Armazenar o token JWT na sessão
        $request->session()->put('jwt_token', $token);

        // Criar um cookie para armazenar o token JWT
        $cookie = cookie('jwt', $token, 60*24);

        // Definir a página atual como 'dashboard'
        $paginaAtual = 'dashboard';

        // Renderizar a visualização da página de dashboard
        $view = view('layout.dashboard')->with('paginaAtual', $paginaAtual);

        // Retornar a resposta com a visualização da página de dashboard, o cookie e o cabeçalho de autorização
        $response = response($view)->withCookie($cookie)->header('Authorization', 'Bearer ' . $token);

        return $response;
    }

    public function logout()
    {
        try {
            // Invalidar o token JWT e realizar o logout
            if (JWTAuth::invalidate(JWTAuth::getToken())) {
                // Retornar uma resposta de sucesso e redirecionar para a página de login
                return redirect()->route('login')->with('success', 'Você acaba de sair do sistema.');
            }
        } catch (\Exception $e) {
            // Lidar com exceções inesperadas
            return redirect()->back()->with('error', 'Erro inesperado. Por favor, contate o suporte.');
        }
    }
}
