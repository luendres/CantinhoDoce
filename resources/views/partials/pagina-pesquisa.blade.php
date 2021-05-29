<div class="container-fluid">
    <div class="row my-3">
        <div class="col-3" style="border-right:solid 2px; border-color:#E0E0E0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link categ" aria-current="page" href="#">Padaria</a>
                <li><a class="dropdown-item" href="#">Pão</a></li>
                <li><a class="dropdown-item" href="#">Pão de 0,5 kg</a></li>
                <li><a class="dropdown-item" href="#">Broa grande</a></li>
                <li><a class="dropdown-item mb-3" href="#">Broa pequena</a></li>
                </li>
            </ul>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link categ " aria-current="page" href="#">Doces</a>
                <li><a class="dropdown-item" href="#">Sobremesas</a></li>
                <li><a class="dropdown-item" href="#">Pastéis Diversos</a></li>
                <li><a class="dropdown-item mb-3" href="#">Pastéis Miniatura Diversos</a></li>
                </li>
            </ul>

            <ul class="nav flex-column">
                <li class="nav-item ">
                    <a class="nav-link categ" aria-current="page" href="#">Salgados</a>
                <li><a class="dropdown-item" href="#">Rissóis</a></li>
                <li><a class="dropdown-item" href="#">Pasteis Diversos</a></li>
                <li><a class="dropdown-item" href="#">Pastéis Miniatura Diversos</a></li>
                <li><a class="dropdown-item mb-3" href="#">Pizzas/Bolas/Quiches</a></li>
                </li>
            </ul>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link categ" aria-current="page" href="#">Produtos ao Peso</a>
                <li><a class="dropdown-item" href="#">Bolos de Aniversário</a></li>
                <li><a class="dropdown-item" href="#">Sobremesas</a></li>
                <li><a class="dropdown-item" href="#">Sortidos</a></li>
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