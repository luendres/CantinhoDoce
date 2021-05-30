<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function userHome()
    {
        $user = \Auth::user();
        return view('/user', compact('user'));
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('edit-user', compact('user'));
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'nome',
            'email',
            'telemovel',
            'morada',
            'postal',
            'cidade',
            'password'
        ]);

        $user->nome = request('nome');
        $user->email = request('email');
        $user->telemovel = request('telemovel');
        $user->morada = request('morada');
        $user->postal = request('postal');
        $user->cidade = request('cidade');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();
    }
}
