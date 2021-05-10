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
Route::get('admin/catalogo', [HomeController::class, 'catalogo'])->name('catalogo')->middleware('is_admin');
Route::get('admin/utilizadores', [HomeController::class, 'utilizadores'])->name('utilizadores')->middleware('is_admin');
Route::get('admin/definicoes', [HomeController::class, 'definicoes'])->name('definicoes')->middleware('is_admin');



Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('/user', [HomeController::class, 'userHome'])->name('/user');
Route::get('/cart', [HomeController::class, 'userCart'])->name('/cart');
