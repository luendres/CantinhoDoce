<div class="container-fluid">
    <div class="row my-3">
        <div class="col-3" style="border-right:solid 2px; border-color:#E0E0E0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link categ" aria-current="page" href="{{ URL::to('/verTodos/Padaria') }}">Padaria</a>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Pão') }}">Pão</a></li>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Pão%200,5') }}">Pão de 0,5 kg</a></li>
                <li><a class="dropdown-item mb-3" href="{{ URL::to('/verTodosSubcategoria/Broa') }}">Broa</a></li>
                </li>
            </ul>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link categ " aria-current="page" href="{{ URL::to('/verTodos/Doces') }}">Doces</a>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Sobremesas') }}">Sobremesas</a></li>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Pasteis%20Diversos') }}">Pastéis Diversos</a></li>
                <li><a class="dropdown-item mb-3" href="{{ URL::to('/verTodosSubcategoria/Pasteis%20Miniatura%20Diversos') }}">Pastéis Miniatura Diversos</a></li>
                </li>
            </ul>

            <ul class="nav flex-column">
                <li class="nav-item ">
                    <a class="nav-link categ" aria-current="page" href="{{ URL::to('/verTodos/Salgados') }}">Salgados</a>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Rissois') }}">Rissóis</a></li>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Pasteis%20Diversos') }}">Pasteis Diversos</a></li>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Pasteis%20Salgados%20Miniatura%20Diversos') }}">Pastéis Salgados Miniatura Diversos</a></li>
                <li><a class="dropdown-item mb-3" href="{{ URL::to('/verTodosSubcategoria/Pizzas,%20Bolas%20e%20Quiches') }}">Pizzas/Bolas/Quiches</a></li>
                </li>
            </ul>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link categ" aria-current="page" href="{{ URL::to('/verTodos/Produtos%20ao%20peso') }}">Produtos ao Peso</a>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Bolos%20de%20aniversario') }}">Bolos de Aniversário</a></li>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Sobremesas%20ao%20peso') }}">Sobremesas ao Peso</a></li>
                <li><a class="dropdown-item" href="{{ URL::to('/verTodosSubcategoria/Sortidos') }}">Sortidos</a></li>
                </li>
            </ul>
        </div>
        <div class="col-7">
            <div class="search-container container">

                <h2> Resultados da pesquisa </h2><br>
                <p> {{$produtos->count()}} resultado(s) para '{{ request()->input('query') }}':</p>



                <div class="col col-md-9 mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-4">
                                @foreach ($produtos as $produto)
                                <div class="col-md-5">

                                    <div class="card h-20">
                                        <img class="img-fluid" src="{{ Storage::url($produto->imagem) }}">
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="{{ URL::to('/productview/' . $produto->id) }}"> {{$produto->nome }}
                                                </a></h4>
                                            <p class="card-text">{{ $produto->categoria }}, {{ $produto->sub_categoria }}</p>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>