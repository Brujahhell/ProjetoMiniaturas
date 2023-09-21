@extends('base')
@section('conteudodapagina')
    <section>
        <div class="linha">
            @foreach($subcategorias as $subcategoria)
            <div class="coluna-20">
                <h2 class="titulo2"> {{$subcategoria->nome}} </h2>
                <a href="/categoria/{{$categoria->slug}}/{{$subcategoria->slug}}">
                    <button><img class="boximg"
                                 src="{{$subcategoria->imagem}}">
                    </button>
                </a>
            </div>
            @endforeach
        </div>
    </section>

@stop
@section('scripts')
@stop
