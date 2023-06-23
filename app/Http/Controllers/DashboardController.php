<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Define a variável $paginaAtual com o valor 'dashboard'
        $paginaAtual = 'dashboard';

        // Retorna a view 'layout.dashboard' passando a variável $paginaAtual como compacta
        return view('layout.dashboard', compact('paginaAtual'));
    }
}
