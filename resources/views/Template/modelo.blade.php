<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style type="text/css">
        h5{
            color: forestgreen;
            font-family: sans-serif;
        }
        dt{
            color: forestgreen;
        }
        
       
    </style>
</head>
<body class="m-0 p-0">
    <div class="container-fluid m-0 p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(página atual)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('animes.lista')}}">Animes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('autor.lista')}}">Autores</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('catalogo')}}">Catálogo de Animes</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-light" role="alert">
                   <h5 class="text-center"> Bem Vindo a AnimaTron!</h5>
                  </div>
            </div>
        </div>
        @yield('conteudo')
        
        
    </div>
    <script src="{{asset('js/all.js')}}"></script>
</body>
</html>