<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Poltroneando</title>
    <!-- <link rel="shortcut icon" href="{{ asset('icons/favicon.png') }}"/> -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}"> 
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Helvetica';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-font navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Poltroneando
                </a>
            </div>

        </div>
    </nav>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">            
                <img src="/imgs/marca.png" class="img-login" alt="Poltroneando" style="max-width: 300px;">
            </div>
        </div>

        <div class="row row-texto">
            <div class="col-md-8 col-md-offset-2">
                <p>Com catalogação e informações sobre séries e filmes, o Poltroneando é a sua nova rede social sobre cultura pop, onde você poderá criar e compartilhar suas listas, recomendações e interesses com seus amigos, além de acessar de maneira personalizada as notícias veiculadas nos maiores portais nacionais!</p>
                <p>Para receber informações sobre o Poltroneando em primeira mão, cadastre seu email abaixo.</p>
            </div>   
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal form-campos" role="form" method="POST" action="{{ url('/') }}">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @foreach ($errors->get('nome') as $error)
                            <p style="float: left;">{{ $error }}</p>
                        @endforeach 
                        <label for="nome" class="control-label sr-only">Nome</label>
                        <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome" value="{{ old('nome') }}">
                        @foreach ($errors->get('email') as $error)
                            <p style="float: left;">{{ $error }}</p>
                        @endforeach 
                        <label for="email" class="control-label sr-only">E-Mail</label>
                        <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}">
                        <input type="submit" class="btn btn-primary botao-enviar" name="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
