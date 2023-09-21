<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request as Req;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PedidosController extends Controller
{
    public function fazerpedido(Req $request){

        $pedido = new Pedidos($request->input());
        $pedido->codigoUser = Auth::user()->id;
        $pedido->save();
        return redirect()->back()->with('mensagem_sucesso', 'Miniatura adicionada com sucesso!');

    }
    public function cadastrar(Req $request)
    {
        $pedidos = new Pedidos($request->input());
        $pedidos->save();
    }


    //    DELETAR ITENS    //
    public function excluirArquivo($codigo)
    {
        DB::table('pedidos')
            ->where('codigo', $codigo)
            ->where('codigoUser', Auth::user()->id)
            ->delete();
        return redirect("/carrinho");
    }

}
