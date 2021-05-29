<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Contacto;
use App\Models\Pedidos;
use App\Models\Produtos;
use App\Models\User;
use Illuminate\Http\Request;

class PesquisasController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');
        $produtos = Produtos::where('nome', 'like', "%$query%")->get();
        return view('search-results')->with('produtos', $produtos)->with('error', 'teste');
    }

    public function pesquisa_produto(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');
        $produtos = Produtos::where('nome', 'like', "%$query%")->get();
        return view('/admin/pesquisa-produto')->with('produtos', $produtos)->with('error', 'teste');
    }


    public function pesquisa_pedido(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');
        $pedidos = Pedidos::where('nome_cliente', 'like', "%$query%")->get();
        return view('/admin/pesquisa-pedido')->with('pedidos', $pedidos);
    }

    public function pesquisa_contacto(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');
        $contactos = Contacto::where('nome', 'like', "%$query%")->get();
        return view('/admin/pesquisa-contacto')->with('contactos', $contactos);
    }

    public function pesquisa_avaliacao(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');
        $avaliacoes = Avaliacao::where('nome', 'like', "%$query%")->get();
        return view('/admin/pesquisa-avaliacao')->with('avaliacoes', $avaliacoes);
    }

    public function pesquisa_user(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');
        $users = User::where('nome', 'like', "%$query%")->get();
        return view('/admin/pesquisa-user')->with('users', $users);
    }
}
