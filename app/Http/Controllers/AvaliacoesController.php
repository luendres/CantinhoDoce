<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class AvaliacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($avaliacao)
    {

        $avaliacao = Avaliacao::find($avaliacao);
        return view('admin.editar-avaliacao', compact('avaliacao'));
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
            'nome',
            'produto_id',
            'avaliacao',
            'nota',
            'estado'
        ]);
        $avaliacao = Avaliacao::find($id);
        $avaliacao->update($validatedData);

        return redirect('/admin/avaliacoes/')
            ->with('success', 'Avaliação atualizada com sucesso');
    }


    public function store(Request $request)
    {
        Avaliacao::create($request->all());
        return redirect()->route('productview', $request->produto_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avaliacao = Avaliacao::find($id);
        $avaliacao->delete();
        return redirect('/admin/avaliacoes/')
            ->with('success', 'Avaliação deletada com sucesso');
    }
}
