@extends('base')
@section('conteudodapagina')
<section>
    <div class="linha">
        @foreach($miniaturas as $miniatura)
            <div class="coluna-20 product-quantity-box">
                <a id="link1" href="{{$miniatura->link}}" target="_blank">
                    <button>
                        <img class="boximg"
                             src="{{$miniatura->imagem}}">
                    </button>
                </a>
                <form action="/fazerpedido" method="post" id="cf" style="padding-left: 25px;"
                      enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
                    <table id="table-itens" class="table table-bordered table-hover table-striped">
                        <tbody>
                <h3 class="titulo2"><input style="text-align: center" type="hidden" name="nome" value="{{$miniatura->nome}}" id="nome" readonly=“true”/> {{$miniatura->nome}} </h3>
                <h3 class="titulo2"><input style="text-align: center" type="hidden" name="imagem" value="{{$miniatura->imagem}}" id="imagem" readonly=“true”/></h3>
                        <tr id='line1' >
                            <td><input type='hidden' class='form-control input-sm codigo' value='{{$miniatura->valor}}' disabled /></td>
                            <td><span style="color: white">Valor R$</span></td>
                            <td class='class_unit'><input style="text-align: center" class="inputvalor" type="text" name="valor" value="{{$miniatura->valor}}" id="valor" readonly=“true”/></td>
                            <td><span style="color: white">Qtd</span></td>
                            <td class='class_quant'><input style="text-align: center" type="text" min="0" size="2" class="quantity" name="quantity" id="quantity" value="0"></td>
                            <td><span style="color: white">Total R$</span></td>
                            <td class='class_total'><input style="width: 50px;" class='input-sm total' type='text'name="total" id='total' value=" " readonly='readonly' /></td>
                        </tr>
                    </table>
                    <button type="submit" id="submit" name="submit" class="myButton">Adicionar ao carrinho</button>
                    <input type="hidden" name="link" value="{{$miniatura->link}}">
                </form>
            </div>
        @endforeach
    </div>
</section>

@stop
@section('scripts')
@stop

