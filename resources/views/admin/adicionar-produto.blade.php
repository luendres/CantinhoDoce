@extends('layouts.app')

@section('content')

<h3 class="mt-4">Adicionar novo produto</h3>
<hr>
<form action="/admin/catalogo" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Nome do produto</label>
        <input type="text" class="form-control" id="nome_produto" name="nome">
    </div>

    <div class="form-group">
        <label for="description">Categoria</label>
        <select class="form-control" id="categoria" name="categoria">
            <option value="" selected="selected"></option>
        </select>
    </div>
    <div class="form-group">
        <label for="description">Sub-Categoria</label>
        <select class="form-control" id="sub_categoria" name="sub_categoria">
            <option value="" selected="selected"></option>
        </select>

    </div>
    <div class="form-group">
        <label for="description">Preço</label>
        <input type="text" class="form-control" id="preco" name="preco" />
    </div>
    <div class="form-group">
        <label for="description">Estado</label><br />
        <label class="radio-inline"><input type="radio" name="estado" value="1"> Ativo</label>
        <label class="radio-inline"><input type="radio" name="estado" value="0"> Inativo</label>
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
        <a href="/admin/catalogo" class="btn btn-danger" style="
    width: 200px; color: white;">Voltar</a>
    </div>
</form>


@endsection

<script>
    var subjectObject = {
        "Padaria": {
            "Pão 0,5": [],
            "Broa Grande": [],
            "Broa Pequena": []
        },
        "Doces": {
            "Sobremesas": [],
            "Pastéis Diversos": [],
            "Pastéis Miniatura Diversos": []
        },
        "Salgados": {
            "Rissóis": [],
            "Pastéis Diversos": [],
            "Pastéis Miniatura Diversos": [],
            "Pizzas, Bolas e Quiches": []
        },
        "Produtos ao Peso": {
            "Bolos de Aniversário": [],
            "Sobremesas": [],
            "Sortidos": []

        }
    }
    window.onload = function() {
        var categoriaSel = document.getElementById("categoria");
        var subcategoriaSel = document.getElementById("sub_categoria");

        for (var x in subjectObject) {
            categoriaSel.options[categoriaSel.options.length] = new Option(x, x);
        }
        categoriaSel.onchange = function() {

            subcategoriaSel.length = 1;
            //display correct values
            for (var y in subjectObject[this.value]) {
                subcategoriaSel.options[subcategoriaSel.options.length] = new Option(y, y);
            }
        }
        subcategoriaSel.onchange = function() {

            //display correct values
            var z = subjectObject[categoriaSel.value][this.value];

        }
    }
</script>