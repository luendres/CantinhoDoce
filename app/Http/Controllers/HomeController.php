<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin-home');
    }

    public function painelControlo()
    {
        return view('admin-paineldecontrolo');
    }

    public function vendas()
    {
        return view('admin-vendas');
    }

    public function catalogo()
    {
        return view('admin-catalogo');
    }

    public function utilizadores()
    {
        return view('admin-utilizadores');
    }

    public function definicoes()
    {
        return view('admin-definicoes');
    }

    public function userHome()
    {
        return view('/user');
    }

    public function userCart()
    {
        return view('/cart');
    }
}
