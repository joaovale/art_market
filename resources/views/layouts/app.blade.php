


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Projeto Art_Maket -->



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Arts Market</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.Home', 'Arts Market') }}
                </a>
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.Home', 'Home') }}
                </a> -->
                @if (!Auth::guest())

                <a class="navbar-brand" href="{{ url('artistas') }}">
                    {{ config('app.artistas', 'Artistas') }}
                </a>

                <a class="navbar-brand" href="{{ url('/obras') }}">
                    {{ config('app.obras', 'Obras') }}
                </a>

                <a class="navbar-brand" href="{{ url('categorias') }}">
                    {{ config('app.obras', 'Categorias') }}
                </a>

                <a class="navbar-brand" href="{{ url('estilos') }}">
                    {{ config('app.obras', 'Estilo') }}
                </a>

                <a class="navbar-brand" href="{{ url('/carrinhos') }}">
                    {{ config('app.obras', 'Carrinho') }}
                </a>

                <a class="navbar-brand" href="{{ url('/enderecos') }}">
                    {{ config('app.obras', 'Cadastrar') }}
                </a>

                <a class="navbar-brand" href="{{ url('/pedidos') }}">
                    {{ config('app.obras', 'Pedido') }}
                </a>




                @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light menu-bar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="  collapse navbar-collapse ml-4" id="navbarNavDropdown">
          <ul class=" navbar-nav ml-5">

            <li class=" nav-item dropdown ">
            <a class="nav-dark " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <a href=""> <img src="./img/home-24px.svg" alt=""> </a>
              </a>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-dark " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Pinturas
                </a>
                <div class="dropdown-menu btn-warning mt-4">
                  <a class="dropdown-item" href="{{('pinturas')}}">TODOS</a>
                  <a class="dropdown-item" href="#">FINE ART</a>
                  <a class="dropdown-item" href="#">MODERNA</a>
                  <a class="dropdown-item" href="#">ABSTRATA</a>
                  <a class="dropdown-item" href="#">POR ART</a>
                  <a class="dropdown-item" href="#">STREET ART</a>
                </div>
              </li>

            <li class="nav-item dropdown ">
              <a class="nav-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Fotografias
              </a>
              <div class="dropdown-menu btn-warning mt-4">
                <a class="dropdown-item" href="fonto.html">TODOS</a>
                <a class="dropdown-item" href="#">FINE ART</a>
                <a class="dropdown-item" href="#">MODERNA</a>
                <a class="dropdown-item" href="#">ABSTRATA</a>
                <a class="dropdown-item" href="#">CONCEITUAL</a>
                <a class="dropdown-item" href="#">RETRATO</a>
              </div>
            </li>

            <li class="nav-item dropdown ">
              <a class="nav-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Desenho
              </a>
              <div class="dropdown-menu btn-warning mt-4">
                <a class="dropdown-item" href="desenho.html">TODOS</a>
                <a class="dropdown-item" href="#">FINE ART</a>
                <a class="dropdown-item" href="#">MODERNA</a>
                <a class="dropdown-item" href="#">ABSTRATA</a>
                <a class="dropdown-item" href="#">GRAFITTI</a>
                <a class="dropdown-item" href="#">ILUSTRACAO DIGITAL</a>
              </div>
            </li>

            <li class="nav-item dropdown ">
              <a class="nav-dark " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Prints
              </a>
              <div class="dropdown-menu btn-warning mt-4">
                <a class="dropdown-item" href="prints.html">TODOS</a>
                <a class="dropdown-item" href="#">COLAGEM</a>
                <a class="dropdown-item" href="#">MODERNA</a>
                <a class="dropdown-item" href="#">ABSTRATA</a>
                <a class="dropdown-item" href="#">GRAFITTI</a>
                <a class="dropdown-item" href="#">ILUSTRACAO DIGITAL</a>
              </div>
            </li>
            <li class="nav-item dropdown mr-5">
              <a class="nav-dark " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                HQ
              </a>
              <div class="dropdown-menu btn-warning mt-4">
                <a class="dropdown-item" href="HQ.html">TODOS</a>
              </div>
            </li>
            <li class="nav-item dropdown mr-5">
              <a class="nav-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Esculturas
              </a>
              <div class="dropdown-menu btn-warning mt-4">
                <a class="dropdown-item" href="escultura.html">TODOS</a>
                <a class="dropdown-item" href="#">FINE ART</a>
                <a class="dropdown-item" href="#">MODERNA</a>
                <a class="dropdown-item" href="#">ABSTRATA</a>
                <a class="dropdown-item" href="#">MINIMALISTA</a>
                <a class="dropdown-item" href="#">FIGURATIVA</a>
              </div>
            </li>
            <li class="nav-item dropdown mr-5">
              <a class="nav-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Outros
              </a>
              <div class="dropdown-menu btn-warning mt-4">
                  <a class="dropdown-item" href="arquitetura.html">ARQUITETURA</a>
              </div>

            </li>

          </ul>
        </div>
      </nav>
    </header>
        <main class="py-4">
            @yield('content')
        </main>


    <!-- ========================================== inicio do footer ===================================== -->

  <nav class="container-fluid navbar navbar-expand-lg navbar-light naves ">
    <ul class="row  lista">
      <li><a href="VendaDeProduto2.html">PARA ARTISTAS</a></li>
      <li><a href="sobre.html">SOBRE</a></li>
      <li><a href="termos_de_servico.html">TERMOS DE SERVIÇO</a></li>
      <li><a href="politica_de_privacidade.html">POLITICAS DE PRIVACIDADE</a></li>
      <li><a href="VendaDeProduto.html">PARA COMPRADORES</a></li>
      <li><a href="">NEWSLETTER</a></li>
      <li><a href="">FALE CONOSCO</a></li>
      <li><a href="">CADASTRAR</a></li>
      <li><a href="">ENTER</a></li>
    </ul>
  </nav>


  <footer class="form-group text-center">
  <br>
    <div>
      <h2>Sociedade an{}nima</h2>
    </div>
    <div>
      <h3>@2019 LOGO|DIGITAL HOUSE|ALL RIGHTS RESERVD</h3>
    </div>
    <div>
      <a href=""><img src="../img/FB_icon-icons.com_65484.png" alt="facebook"></a>
      <a href=""><img src="../img/instagram_icon-icons.com_49943.png" alt="instagram"></a>
      <a href=""><img src="../img/icons8-pinterest-50.png" width="29px" alt="pintrest"></a>
      <a href=""><img src="../img/twitter-3_icon-icons.com_50735.png" alt="twitter"></a>
    </div>
  </footer>
  <!-- </div> -->
</body>
</html>

<link rel="stylesheet" href="/../css/home1.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Infor_obra.css') }}" rel="stylesheet">
