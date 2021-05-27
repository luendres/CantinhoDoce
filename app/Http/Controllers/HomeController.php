<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\User;
use App\Http\Controllers\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */




    public function index()
    {
        return view('home');
    }


    public function adminHome()
    {
        return view('admin.home');
    }

    public function painelControlo()
    {
        return view('admin.paineldecontrolo');
    }



    public function vendas()
    {
        return view('admin.vendas');
    }

    public function remessas()
    {
        return view('admin.remessas');
    }

    public function faturas()
    {
        return view('admin.faturas');
    }



    public function catalogo()
    {
        return view('admin.catalogo');
    }

    public function categorias()
    {
        return view('admin.categorias');
    }



    public function utilizadores()
    {
        return view('admin.utilizadores');
    }
    public function mensagens()
    {
        return view('admin.mensagens');
    }


    public function avaliacoes()
    {
        return view('admin.avaliacoes');
    }



    public function definicoes()
    {
        return view('admin.definicoes');
    }

    public function userHome()
    {
        $user = \Auth::user();
        return view('/user', compact('user'));
    }






    public function userCart()
    {
        return view('/cart');
    }
}