<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);
Route::get('/categoria/{url}', [\App\Http\Controllers\Controller::class, 'categoria']);
Route::get('/categoria/{categoria_url}/{subcategoria_url}', [\App\Http\Controllers\Controller::class, 'subcategoria']);
Route::get('/monstros', [\App\Http\Controllers\Controller::class, 'monstros']);
Route::get('/personagens', [\App\Http\Controllers\Controller::class, 'personagens']);
Route::get('/cenarios', [\App\Http\Controllers\Controller::class, 'cenarios']);
Route::get('/npcs', [\App\Http\Controllers\Controller::class, 'npcs']);
Route::get('/cadastrar', [\App\Http\Controllers\Controller::class, 'cadastro']);
Route::get('/carrinho/', [\App\Http\Controllers\UserController::class, 'pedidos']);
Route::post('/fazerpedido', [\App\Http\Controllers\PedidosController::class, 'fazerpedido']);
Route::get('/compras', [\App\Http\Controllers\UserController::class, 'compras']);

Route::get('/teste', [\App\Http\Controllers\UserController::class, 'teste']);


Route::get('/carrinho/excluir/{codigo}', [\App\Http\Controllers\PedidosController::class, 'excluirArquivo']); //

require __DIR__ . '/auth.php';
