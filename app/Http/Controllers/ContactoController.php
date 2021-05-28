<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contactos');
    }

    public function Contacto(Request $request)
    {

        // Form validation
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required',

        ]);

        //  Store data in database
        dd($request->all());
        Contacto::create($request->all());

        // 
        return back()->with('success', 'Obrigada pela sua mensagem, foi recebida com sucesso!');
    }
}
