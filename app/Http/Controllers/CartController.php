<?php

namespace App\Http\Controllers;

class CartController extends Controller
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
        return view('cart');
    }

    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Models\Produtos');

        return redirect()->route('cart.index')->with('success_message','O item foi adicionado ao carrinho!'):
    }
}