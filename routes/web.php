<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AvaliacoesController;
use App\Http\Controllers\PesquisasController;
use App\Models\Avaliacao;
use App\Models\Pedidos;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Http\Controllers\CartController;
use App\Models\Cart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $produtos = App\Models\Produtos::where('estado', 1)->get();
    return view('home', compact('produtos'));
});

Route::get('/search', 'App\Http\Controllers\PesquisasController@search')->name('search');
Route::get('/pesquisa-produto', 'App\Http\Controllers\PesquisasController@pesquisa_produto')->name('pesquisa-produto');
Route::get('/pesquisa-pedido', 'App\Http\Controllers\PesquisasController@pesquisa_pedido')->name('pesquisa-pedido');
Route::get('/pesquisa-user', 'App\Http\Controllers\PesquisasController@pesquisa_user')->name('pesquisa-user');
Route::get('/pesquisa-avaliacao', 'App\Http\Controllers\PesquisasController@pesquisa_avaliacao')->name('pesquisa-avaliacao');
Route::get('/pesquisa-contacto', 'App\Http\Controllers\PesquisasController@pesquisa_contacto')->name('pesquisa-contacto');



Route::get('/user', [HomeController::class, 'userHome'])->name('/user');

Route::get('/encomendasUser', [HomeController::class, 'encomendasUser'])->name('/');

Route::get('/carrinho', [HomeController::class, 'carrinho'])->name('/carrinho');


Route::get('/contactos', [ContactoController::class, 'createForm']);
Route::post('/contactos', [ContactoController::class, 'Contacto'])->name('contacto.store');


Route::get('/verTodos/{categoria}', 'App\Http\Controllers\ProdutosController@verTodos')->name('verTodos');
Route::get('/verTodosSubcategoria/{sub_categoria}', 'App\Http\Controllers\ProdutosController@verTodosSubcategoria')->name('verTodosSubcategoria');

Route::get('/products', function () {
    // $produtos_padaria = DB::table('produtos')->where('estado', '>', 0)->having('categoria', '=', 'padaria')->get();

    $produtos_padaria = DB::table('produtos')->where('estado', 1)->where('categoria', 'Padaria')->get();

    // $produtos_doces = DB::table('produtos')->where('estado', '>', 0)->having('categoria', '=', 'doces')->get();
    $produtos_doces = DB::table('produtos')->where('estado', 1)->where('categoria', 'Doces')->get();

    // $produtos_salgados = DB::table('produtos')->where('estado', '>', 0)->having('categoria', '=', 'salgados')->get();
    $produtos_salgados = DB::table('produtos')->where('estado', 1)->where('categoria', 'Salgados')->get();

    //$produtos_peso = DB::table('produtos')->where('estado', '>', 0)->having('categoria', '=', 'produtos ao peso')->get();
    $produtos_peso = DB::table('produtos')->where('estado', 1)->where('categoria', 'Produtos ao Peso')->get();

    return view('products')->with(compact('produtos_padaria', 'produtos_doces', 'produtos_salgados', 'produtos_peso'));
});


Route::get('/productview/{id}', 'App\Http\Controllers\ProdutosController@productview')->name('productview');

Route::resource('avaliacao', 'App\Http\Controllers\AvaliacoesController')->only(['store']);


Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::patch('/cart/{product}', [CartController::class, 'update'])->name('cart.update');


/* Admin Routes */

Auth::routes();

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/paineldecontrolo', [HomeController::class, 'painelControlo'])->name('painel.controlo')->middleware('is_admin');



Route::get('admin/vendas', [HomeController::class, 'vendas'])->name('vendas')->middleware('is_admin');
Route::get('admin/vendas', function () {
    $pedidos = App\Models\Pedidos::paginate(5);
    return view('admin.vendas', ['pedidos' => $pedidos]);
});
Route::get('admin/vendas/remessas', [HomeController::class, 'remessas'])->name('remessas')->middleware('is_admin');
Route::get('admin/vendas/faturas', [HomeController::class, 'faturas'])->name('faturas')->middleware('is_admin');


Route::get('admin/catalogo', [HomeController::class, 'catalogo'])->name('catalogo')->middleware('is_admin');
Route::get('admin/catalogo/categorias', [HomeController::class, 'categorias'])->name('categorias')->middleware('is_admin');

Route::get('/admin/catalogo/adicionar-produto', 'App\Http\Controllers\ProdutosController@create');
Route::post('/admin/catalogo', 'App\Http\Controllers\ProdutosController@store');
Route::get('/admin/catalogo', 'App\Http\Controllers\ProdutosController@index');
Route::get('/admin/catalogo/{id}/editar-produto', 'App\Http\Controllers\ProdutosController@edit')->name('admin.editar-produto');
Route::patch('/admin/catalogo/{id}', 'App\Http\Controllers\ProdutosController@update')->name('produto.update');
Route::get('/admin/catalogo/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('produto.destroy');

Route::get('admin/utilizadores', [HomeController::class, 'utilizadores'])->name('utilizadores')->middleware('is_admin');
Route::get('admin/utilizadores', function () {
    //$utilizadores = DB::select('select * from users where is_admin is null or is_admin < 1');
    $utilizadores = App\Models\User::where('is_admin', null)->orWhere('is_admin', 0)->paginate(5);
    return view('admin.utilizadores', ['utilizadores' => $utilizadores]);
});

Route::get('admin/mensagens', [HomeController::class, 'mensagens'])->name('mensagens')->middleware('is_admin');
Route::get('admin/mensagens', function () {
    $mensagens = App\Models\Contacto::paginate(5);
    return view('admin.mensagens', ['mensagens' => $mensagens]);
});


Route::get('admin/avaliacoes', [HomeController::class, 'avaliacoes'])->name('avaliacoes')->middleware('is_admin');
Route::get('/admin/avaliacoes/{id}', 'App\Http\Controllers\AvaliacoesController@destroy')->name('avaliacao.destroy');
Route::get('/admin/avaliacoes/{id}/editar-avaliacao', 'App\Http\Controllers\AvaliacoesController@edit')->name('admin.editar-avaliacao');
Route::patch('/admin/avaliacoes/{id}', 'App\Http\Controllers\AvaliacoesController@update')->name('avaliacao.update');


Route::get('admin/avaliacoes', function () {
    $avaliacoes = App\Models\Avaliacao::paginate(5);
    return view('admin.avaliacoes', ['avaliacoes' => $avaliacoes]);
});

Route::get('admin/definicoes', [HomeController::class, 'definicoes'])->name('definicoes')->middleware('is_admin');

/* Fim de Admin Routes */
