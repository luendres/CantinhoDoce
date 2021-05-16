@extends('layouts.app')

@section('content')
<h1>Edit produto</h1>
<hr>
<form action="{{url('/admin/catalogo', [$produto->id])}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nome">produto nome</label>
        <input type="text" value="{{$produto->nome}}" class="form-control" id="produtonome" name="nome">
    </div>
    <div class="form-group">
        <label for="categoria">produto categoria</label>
        <input type="text" value="{{$produto->categoria}}" class="form-control" id="produtocategoria" name="categoria">
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection