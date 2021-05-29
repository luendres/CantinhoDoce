<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Avaliacao;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Session;


class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

        $produtos = Produtos::orderBy('id', 'desc')->paginate(10);
        return view('admin.catalogo', compact('produtos', $produtos))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function get_produtos(Request $request)
    {
        return view('admin.catalogo', Produtos::paginate($request->get('per_page', 25)));
    }



    public function create()
    {
        return view('admin.adicionar-produto');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|unique:produtos',
            'categoria' => 'required',
            'sub_categoria' => 'required',
            'preco' => 'required',
            'estado' => 'required',


        ]);

        $produto = new Produtos;
        if ($request->hasFile('imagem')) {
            $request->validate([
                'imagem' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('imagem')->store('public/images');
            $produto->imagem = $path;
        }

        $produto->nome = $request->nome;
        $produto->categoria = $request->categoria;
        $produto->sub_categoria = $request->sub_categoria;
        $produto->preco = $request->preco;
        $produto->estado = $request->estado;
        $produto->save();

        return redirect('/admin/catalogo/')
            ->with('success', 'Produto criado com sucesso!');
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


    public function update(Request $request, $id)
    {
        //Validate
        $validatedData = $request->validate([
            'nome' => 'required',
            'categoria' => 'required',
            'sub_categoria' => 'required',
            'preco' => 'required',
            'estado' => 'required',
        ]);
        $produto = Produtos::find($id);

        if ($request->hasFile('imagem')) {
            $request->validate([
                'imagem' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('imagem')->store('public/images');
            $produto->imagem = $path;
        }
        $produto->update($validatedData);

        return redirect('/admin/catalogo/')
            ->with('success', 'Produto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produtos::find($id);
        $produto->delete();
        return redirect('/admin/catalogo/')
            ->with('success', 'Produto deletado com sucesso');
    }

    public function productview($id)
    {
        $produto = Produtos::where('id', $id)->where('estado', 1)->first();

        $similares = Produtos::where('sub_categoria', $produto->sub_categoria)->where('id', '!=', $id)->get();

        $avaliacoes = Avaliacao::where('produto_id', $produto->id)->where('estado', 1)->get();

        return view('/productview')->with(compact('produto', 'similares', 'avaliacoes'));
    }

    public function verTodos($categoria)
    {
        $produto = Produtos::where('estado',1)->where('categoria', $categoria)->get();
        return view('/verTodos')->with(compact('produto'));
    }



 
}
