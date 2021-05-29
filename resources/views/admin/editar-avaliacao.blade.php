@extends('layouts.app')

@section('content')
<h3 class="mt-4">Editar Estado da Avaliação do Produto</h3>
<hr>


<form action="{{ route('avaliacao.update', $avaliacao->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PATCH')
    <div class="form-group mt-3">
        <label for="title">Nome do Avaliador</label>
        <div class="form-control" id="nome" name="nome">{{ $avaliacao->nome }}

        </div>

        <div class="form-group mt-3">
            <label for="description">Avaliação</label>
            <div class="form-control" id="avaliacao" name="avaliacao"> {{ $avaliacao->avaliacao }}
            </div>
            <div class="form-group mt-3">
                <label for="description">Estado: <br>
                    Defina <b>1</b> para estar <b>visível</b> no site <br>
                    Defina <b>0</b> para <b>não mostrar</b> no site</label><br />
                <input type="number" min="0" max="1" name="estado" id="estado" class="form-control" value="{{ $avaliacao->estado }}">
            </div>


            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row" style="place-content: center;">
                <button type="submit" class="btn btn-success mx-3" style="
    width: 200px; color: white;">Salvar</button>
                <a href="/admin/avaliacoes" class="btn btn-danger" style="
    width: 200px; color: white;">Voltar</a>
            </div>
</form>


@endsection