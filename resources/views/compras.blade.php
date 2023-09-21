@extends('base')
@section('conteudodapagina')

    <div class="linha">
        <div class="coluna-95">
            <div class="carrinho2">
                <div class="linha2">
                    <div class="coluna-10">
                        <h3> Imagem </h3>
                    </div>
                    <div class="coluna-30">
                        <h3> Nome </h3>
                    </div>
                    <div class="coluna-30">
                        <h3> Item </h3>
                    </div>
                    <div class="coluna-10">
                        <h3> Quant. </h3>
                    </div>
                    <div class="coluna-10">
                        <h3> Valor Unitario </h3>
                    </div>
                    <div class="coluna-5">
                        <h3> Total </h3>
                    </div>

                    {{--        pega a variavel zerada para calcular dentro do foreach--}}
                    @foreach($pedidos as $pedido)
                        {{--  tabela($pedidos) e depois variavel($pdd)  --}}

                        <div class="coluna-10">
                            <h3><img class="boximgcarrinho"
                                     src="{{$pedido->imagem}}"></h3>
                        </div>
                        <div class="coluna-30">
                            <h3>{{$pedido->nome}}</h3>
                        </div>
                        <div class="coluna-30">
                            <a class="link" target="_blank" rel="external"
                               href="{{$pedido->link}}" style="color: black;">
                                <h3>{{$pedido->link}}</h3></a>
                        </div>
                        <div class="coluna-10">
                            <h3>{{$pedido->quantity}}</h3>
                        </div>
                        <div class="coluna-10">
                            <h3>R${{$pedido->valor}}</h3>
                        </div>
                        <div class="coluna-5">
                            <h3>R${{$pedido->total}}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>



@stop
@section('scripts')
@stop
