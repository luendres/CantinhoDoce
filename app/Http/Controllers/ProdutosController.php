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

        Produtos::create($request->all());

        return redirect('/admin/catalogo/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $produto)
    {
        return view('admin.catalogo', compact('produto', $produto));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($produto)
    {

        $produto = Produtos::find($produto);
        return view('admin.editar-produto', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Produtos $produto)
    {
        //Validate
        $validatedData = $request->validate([
            'nome' => 'required|unique:produtos',
            'categoria' => 'required',
            'sub_categoria' => 'required',
            'preco' => 'required',
            'estado' => 'required',
        ]);

        Produtos::find($produto);
        $produto->update($request->all());

        return redirect('/admin/catalogo/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtos $produto)
    {
        $produto->delete();
        return redirect()->route('admin.catalogo')
            ->with('success', 'Produto deletado com sucesso');
    }
}
