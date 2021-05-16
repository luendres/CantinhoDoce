<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;


class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

        $produtos = Produtos::all();
        return view('admin.catalogo', compact('produtos', $produtos));
    }


    public function create()
    {
        return view('admin.adicionar-produto');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|unique:produtos',
            'categoria' => 'required',
            'sub_categoria' => 'required',
            'preco' => 'required',
            'estado' => 'required',
        ]);

        $produto = Produtos::create($request->all());

        return redirect('/admin/catalogo/' . $produto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produto)
    {
        return view('admin.editar-produto', compact('produto', $produto));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
