<!doctype html>
<html lang="en">
<head>
    <title>Project 3D Art</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/assets/css/style2.css" media="screen" id="color">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="screen" id="color">
</head>
<body>
<div class="containerL">
    <header class="cabecalho linha">
        <a class="coluna-25" href="/cadastrar#paracadastro">
            <span class="subtitulo2">Cadastrar</span>
        </a>
        <a class="coluna-25" href="/">
            <span class="subtitulo2">Home</span>
        </a>
        <a class="coluna-25" href="/">
            <span class="subtitulo2">Contato</span>
        </a>
        <a class="coluna-25" href="/cadastrar#paralogin">
            <span class="subtitulo2">Login</span>
        </a>
    </header>
    <section class="subtitulo">
        <h1 class="titulo"> PROJECT 3D ART </h1>
        <h2> Seu site para encomenda de miniaturas feitas em impressora 3D...
            <p> em Resina e/ou Filamento </p></h2>
    </section>
    <a class="links" id="paralogin"></a>
    <a class="links" id="paracadastro"></a>

    <div class="content">
        <!--FORMULÁRIO DE LOGIN-->
        <x-auth-session-status class="mb-4" :status="session('status')"/>
        <div id="login">
            <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data" >
                @csrf
                <h1>Login</h1>
                <!-- Email Address -->
                <div class="distancia">
                    <x-input-label for="email" :value="__('Email')"/>

                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                  required autofocus/>

                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <!-- Senha -->
                <div class="mt-4 distancia">
                    <x-input-label for="password" :value="__('Senha')"/>

                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password"/>

                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                               name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <div class="distancia" style="padding-top: 10px">
                        <x-primary-button class="ml-3 myButton">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </div>

                <p class="link">
                    Ainda não tem conta?
                    <a href="#paracadastro">Cadastre-se</a>
                </p>
            </form>
        </div>

        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <h1>Cadastrar</h1>
                <!-- Name -->
                <div class="distancia">
                    <x-input-label for="name" :value="__('Nome')"/>

                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                  required autofocus/>

                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                </div>

                <!-- Email Address -->
                <div class="mt-4 distancia">
                    <x-input-label for="email" :value="__('Email')"/>

                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                  required/>

                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <!-- Password -->
                <div class="mt-4 distancia">
                    <x-input-label for="password" :value="__('Senha')"/>

                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="new-password"/>

                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 distancia">
                    <x-input-label for="password_confirmation" :value="__('Confirmar Senha')"/>

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                  type="password"
                                  name="password_confirmation" required/>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                </div>

                <div class="flex items-center justify-end mt-4 distancia">

                    <x-primary-button class="ml-4 myButton">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

                <p class="link">
                    Já tem conta?
                    <a href="#paralogin"> Ir para Login </a>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
<script>

</script>
</html>
