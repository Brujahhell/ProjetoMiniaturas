<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Miniaturas;
use App\Models\Subcategorias;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $categorias = Categorias::orderBy('id')->get();
        return view('/index')->with('categorias', $categorias);
    }

    public function categoria($url)
    {
        $categoria = Categorias::where('slug', $url)->first();
        $subcategorias = Subcategorias::where('categoria_id', $categoria->id)->orderBy('nome')->get();
        return view('/categoria')->with('subcategorias', $subcategorias)->with('categoria', $categoria);
    }

    public function subcategoria($categoria_url , $subcategoria_url)
    {
        $categoria = Categorias::where('slug', $categoria_url)->first();
        $subcategoria = Subcategorias::where('slug', $subcategoria_url)->first();
        $miniaturas = Miniaturas::where('subcategoria_id', $subcategoria->id)->get();
        //dd($categoria,$subcategoria,$miniaturas );
        return view('/subcategoria')->with('categoria', $categoria)->with('miniaturas', $miniaturas)->with('subcategorias', $subcategoria);
    }

    public function cadastro()
    {
        return view('/cadastrar');
    }

    public function login()
    {
        return view('/login');
    }
    public function carrinho()
    {
        return view('/carrinho');
    }


}
