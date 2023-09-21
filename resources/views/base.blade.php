<!doctype html>
<html lang="en">
<head>
    <title>Project 3D Art</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="screen" id="color">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="margin: 0px">
<div class="wrapper">
    <header class="cabecalho linha">
        @auth
            <a class="coluna-20">
                <span class="subtitulo2">{{ Str::upper(\Illuminate\Support\Facades\Auth::user()->name) }}</span>
            </a>
            <span>
                <H3 style="color: azure; margin-top: 10px  ">

                </H3>
            </span>
        @else
            <a class="coluna-35" href="/cadastrar#paracadastro">
                <span class="subtitulo2">Cadastrar</span>
            </a>
        @endauth
        <a class="coluna-15" href="/">
            <span class="subtitulo2">Home</span>
        </a>
        <a class="coluna-15" href="#rodapé">
            <span class="subtitulo2">Contato</span>
        </a>
        @auth
            <a class="coluna-15" target="_blank" href="/carrinho">
                <span class="subtitulo2" >Carrinho</span>
            </a>
            <a class="coluna-15" target="_blank" href="/compras">
                    <span class="subtitulo2" >Compras</span>
            </a>
            <a class="coluna-15" href="/logout">
                <span class="subtitulo2">Sair</span>
            </a>
        @else
            <a class="coluna-35" href="/cadastrar#paralogin">
                <span class="subtitulo2">Login</span>
            </a>
        @endauth
    </header>
    <section class="container subtitulo">
        <h1 class="titulo"> PROJECT 3D ART </h1>
        <h2> Seu site para encomenda de miniaturas feitas em impressora 3D...
            <p> em Resina e/ou Filamento </p></h2>
    </section>
    @if (\Session::has('mensagem_sucesso'))
        <div class="alert alert-success">
            <ul>
                <li class="sucesso">{!! \Session::get('mensagem_sucesso') !!}</li>
            </ul>
        </div>
    @endif

    @yield('conteudodapagina')

</div>
<footer id="rodapé">
    <div class="rodapé linha">
        <a class="coluna-25">
            <div href="#/" style="color: white; font-size: 30px;  font-weight: bold">PROJECT 3D ART</div>
            <p style="color: white">Venha ter uma experiência mais aprofundada com a sua mesa, <br> miniaturas para sua
                aventura. </p>
        </a>
        <a class="coluna-25" target="_blank" href="https://www.facebook.com/Project3DArt">
            <span class="subtitulo2">Facebook</span>
            <p><img class="instagram" src="https://www.transparentpng.com/thumb/facebook-logo/facebook-logo-png-file-8.png" alt="facebook logo png file @transparentpng.com"></p>

        </a>
        <a class="coluna-25" target="_blank" href="https://www.instagram.com/project3dartsreturn/">
            <span class="subtitulo2">Instagram</span>
            <p><img class="instagram" src="/assets/imagens/instagram.png" alt="logo instagram images @transparentpng.com"></p>
        </a>
        <a class="coluna-25" target="_blank" href="https://api.whatsapp.com/send?phone=27981116969&text=Texto%20aqui">
            <span class="subtitulo2">Whatsapp</span>
            <p><img class="instagram" src="/assets/imagens/whatsapp.png" alt="clipart whatsapp logo png photos @transparentpng.com"></p>
            </a>
        </a>
    </div>
</footer>
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script src="//code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">


    const quantityBox = document.querySelectorAll('.product-quantity-box .js-change-quantity');

    for (let each of quantityBox){
        each.addEventListener('click', function(e){
            const math = this.getAttribute('data-quantity-func');
            const quantityInput = this.closest('.product-quantity-box').querySelector('.quantity');
            const current = parseInt(quantityInput.value);

            if (math === 'plus') {
                quantityInput.value = current + 1;
            } else if (quantityInput.value > 1){
                quantityInput.value = current -1 ;
            }
        });
    }
    //Quando houver alguma ação nos campos quantidade ou valor unitario
    $('.quantity, .inputvalor').on('change blur keyup',function(){
        $('.quantity').each(function(){//percorre todos os campos de quantidade
            //quantidade
            var qtd = $(this).val();
            //pega o valor unitário
            var vlr = $(this).parent('td').siblings('td.class_unit').children('.inputvalor').val();
            // coloca o resultado no valor total
            $(this).parent('td').siblings('td').children('.total').val(qtd * vlr);
        });
        //Soma o valor total do pedido
        var total = 0;
        $('.total').each(function(){
            if($(this).val()){
                total += parseFloat($(this).val());
                $('.value_total').html(total);
            }
        });
    });

</script>
</body>
</html>
