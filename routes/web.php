<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/productview', function () {
    return view('productview');
});


Auth::routes();

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/paineldecontrolo', [HomeController::class, 'painelControlo'])->name('painel.controlo')->middleware('is_admin');

Route::get('admin/vendas', [HomeController::class, 'vendas'])->name('vendas')->middleware('is_admin');
Route::get('admin/vendas/remessas', [HomeController::class, 'remessas'])->name('remessas')->middleware('is_admin');
Route::get('admin/vendas/faturas', [HomeController::class, 'faturas'])->name('faturas')->middleware('is_admin');


Route::get('admin/catalogo', [HomeController::class, 'catalogo'])->name('catalogo')->middleware('is_admin');
Route::get('admin/catalogo/categorias', [HomeController::class, 'categorias'])->name('categorias')->middleware('is_admin');

Route::get('/admin/catalogo/adicionar-produto', 'App\Http\Controllers\ProdutosController@create');
Route::post('/admin/catalogo', 'App\Http\Controllers\ProdutosController@store');
Route::get('/admin/catalogo', 'App\Http\Controllers\ProdutosController@index');
Route::get('/admin/catalogo/{id}/editar-produto', 'App\Http\Controllers\ProdutosController@edit')->name('admin.editar-produto');
Route::patch('/admin/catalogo', 'App\Http\Controllers\ProdutosController@update')->name('produto.update');

Route::get('admin/utilizadores', [HomeController::class, 'utilizadores'])->name('utilizadores')->middleware('is_admin');
Route::get('admin/utilizadores', function () {

    $utilizadores = DB::select('select * from users where is_admin is null or is_admin < 1');
    return view('admin.utilizadores', ['utilizadores' => $utilizadores]);
});

Route::get('admin/utilizadores/avaliacoes', [HomeController::class, 'avaliacoes'])->name('avaliacoes')->middleware('is_admin');
Route::resource('avaliacoes', 'AvaliacoesController');

Route::get('admin/definicoes', [HomeController::class, 'definicoes'])->name('definicoes')->middleware('is_admin');



Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('/user', [HomeController::class, 'userHome'])->name('/user');
Route::get('/cart', [HomeController::class, 'userCart'])->name('/cart');
