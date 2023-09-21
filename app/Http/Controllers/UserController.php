<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('/index')->with('users', $users);
    }

    public function pedidos()
    {
       $pedidos = DB::table('pedidos')
           ->where('codigoUser', Auth::id() )
           ->where('status', 0)
           ->get();
        return view('/carrinho')->with('pedidos', $pedidos);
    }
    public function compras()
    {
        $pedidos = DB::table('pedidos')
            ->where('codigoUser', Auth::id() )
            ->where('status', 1)
            ->get();
        return view('/compras')->with('pedidos', $pedidos);
    }
    public function teste()
    {
        return view('/teste');

    }
}
