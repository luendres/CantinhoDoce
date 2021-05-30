<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\User;
use App\Models\Order;

use App\Models\OrderProduct;
use Carbon\Carbon;
use App\Http\Controllers\Auth;
use ArielMejiaDev\LarapexCharts\LarapexChart;

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


        $userCount = User::where('is_admin', '=', null)->count();
        $pedidosCount = Order::count();
        $pedidosSum = Order::sum('subtotal');
        $mediaVendas = Order::avg('subtotal');
        $media = round($mediaVendas, 2);
        $chart = (new LarapexChart)->areaChart()
            ->setTitle('Vendas')
            ->setSubtitle('Período Total')
            ->addArea('Vendas em Euros', \App\Models\Order::query()->pluck('subtotal')->toArray())
            ->setColors(['#ff6384'])
            ->setXAxis(\App\Models\Order::query()->pluck('created_at')->toArray())
            ->setGrid();

        $date = Carbon::today()->toDateString();
        $pedido_date = \App\Models\Order::first();



        return view('admin.paineldecontrolo')->with(compact('userCount', 'pedidosCount', 'pedidosSum', 'media', 'chart', 'date', 'pedido_date'));
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



    public function encomendasUser()
    {
        $id = \Auth::user()->id;
        $Order = Order::where('user_id', $id)->get();
        return view('/encomendasUser', compact('Order'));
    }

    public function carrinho()
    {
        return view('cart');
    }

    public function verTodos()
    {
        return view('/verTodos');
    }


    public function aboutUs()
    {
        return view('/aboutUs');
    }
}
