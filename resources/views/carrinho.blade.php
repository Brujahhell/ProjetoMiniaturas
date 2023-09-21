@extends('base')
@section('conteudodapagina')

    <div class="linha">
        <div class="coluna-70">
            <div class="carrinho">
                <div class="linha">
                    <div class="coluna-10">
                        <h3 class="espacetitulo"> Imagem </h3>
                    </div>
                    <div class="coluna-30">
                        <h3 class="espacetitulo"> Nome </h3>
                    </div>
                    <div class="coluna-30">
                        <h3 class="espacetitulo"> Item </h3>
                    </div>
                    <div class="coluna-5">
                        <h3 class="espacetitulo"> Quant. </h3>
                    </div>
                    <div class="coluna-10">
                        <h3 class="espacetitulo"> Valor Unitario </h3>
                    </div>
                    <div class="coluna-10">
                        <h3 class="espacetitulo"> Total </h3>
                    </div>

                    <?php $total = 0; ?>
                    <?php $qunt = 0; ?>

                    {{--        pega a variavel zerada para calcular dentro do foreach--}}
                    @foreach($pedidos as $pedido)
                        {{--  tabela($pedidos) e depois variavel($pdd)  --}}

                        <div class="coluna-10">
                            <h3><img class="boximgcarrinho"
                                     src="{{$pedido->imagem}}"></h3>
                        </div>
                        <div class="coluna-30">
                            <h3 class="espacedescription">{{$pedido->nome}}</h3>
                        </div>
                        <div class="coluna-30">
                            <a class="link" target="_blank" rel="external"
                               href="{{$pedido->link}}" style="color: black;">
                                <h3 class="espacedescription">{{$pedido->link}}</h3></a>
                        </div>
                        <div class="coluna-5">
                            <h3 class="espacedescription">{{$pedido->quantity}}</h3>
                        </div>
                        <div class="coluna-10">
                            <h3 class="espacedescription">R${{$pedido->valor}}</h3>
                        </div>
                        <div class="coluna-10">
                            <h3 class="espacedescription">R${{$pedido->total}}</h3>
                        </div>
                        <div class="coluna-10 btnclose espacedescription" >


                        <a class="icon-btn button-effect" type="submit" href="/carrinho/excluir/{{$pedido->codigo}}"
                           data-tippy-content=" Close"> <i class="fa fa-close" style="color: white"> </i>
                        </a>


                        </div>
                            <?php $total += $pedido->total; ?>
                        <?php $qunt += $pedido->quantity; ?>

                    @endforeach
                </div>
            </div>
        </div>
        <div class="coluna-30">
            <div class="carrinho3">
                <div style='text-align:center'>
                    <h2> QUANTIDADE DE MINIATURAS </h2>
                    <h2 style="text-align: center">{{$qunt}} </h2>
                </div>
                <div style='text-align:center'>
                    <h2> VALOR TOTAL DO PEDIDO</h2>
                    <h2 style="text-align: center">R${{$total}} </h2>
                </div>
                                <div style='text-align:center'>
                    <H1>______________________</H1>
                    <h2> FORMAS DE PAGAMENTO </h2>
                </div>
                <div class="espacebutton">
                    <div id="modalPix" class="modal">
                        <div class="modal-content">
                            <form>
                                <a class="visivel" id="valor" style="text-align: center">R${{$total}} </a>
                                <a class="visivel" type="text" id="chavePix" name="chavePix">27981116969</a>
                                <button  type="button" class="pix-button pagbutton" onclick="pagarComPix()">Pagar com PIX</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div >
                    <form target="pagseguro" method="post" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml">
                        <input type="hidden" name="email_cobranca" value="suporte@lojamodelo.com.br">
                        <input type="hidden" name="tipo" value="CP">
                        <input type="hidden" name="moeda" value="BRL">

                        <input type="hidden" name="item_id_1" value="12345">
                        <input type="hidden" name="item_descr_1" value="{{$qunt}} Miniaturas  ">
                        <input type="hidden" name="item_quant_1" value="1">
                        <input type="hidden" name="item_valor_1" value="{{$total}},00">
                        <input type="hidden" name="item_frete_1" value="0">
                        <input type="hidden" name="item_peso_1" value="0">

                        <input type="hidden" name="tipo_frete" value="EN">
                        <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/99x61-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="linha">
        <div class="coluna-70">
            <div class="carrinho2">
                <div class="linha">
                    <div class="coluna-75">
                        <h3> Codigo de Rastreio </h3>
                        <br>
                        <span> faiushfahfuihsiufhajfhasjlhfahfjalhfafhjalfhlsagfoalgfjohigafgahfgaf </span>
                    </div>
                    <div class="coluna-25">
                        <h3> Status do pedido </h3>
                        <br>
                        <span> Entregue </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
@section('scripts')
@stop
