<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/home1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <title>@yield('titulo')</title>
</head>

<body>
  <div>

    <header >
      <div class=" container log  row">
        <div class="logo col-lg-3 ">
          <h1><img src="./img/logo_preto.png" width="210px" alt=""></h1>
        </div>

        <div class="enter d-flex flex-row-reverse col-lg-9">
          <ul>
            <li><a href="RegistroDeCliente.html">Registre-se</a></li>
            <li>|</li>



            <li class="enter"><button type="button" class=" button4" data-toggle="modal" data-target="#Login">
                Entrar
              </li>

            <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="LoginLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div>
                    <button type="button" class="close pr-2" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="mt-3 ml-3">AINDA NÃO É CADASTRADO?</h5>

                    <p Class="h5 mx-4">Registre-se para encontrar pecas únicas, incentivar o mercado independente e
                      também
                      divulgar seu trabalho artístico</p>
                    <p></p>

                    <button type="submit" formaction="../html-css-wilson/RegistroDeCliente.html" class="button5"
                      data-dismiss="modal">REGISTRE-SE</button>

                    <p Class="h5 ml-3">ENTRE</p>


                    <form>
                      <div class="form-group ">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                          placeholder="e-mail">

                      </div>
                      <div class="form-group ">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control mx-2" id="senha" placeholder="Senha">
                      </div>
                      <div class="d-flex">
                        <button type="submit" class="button3 mx-4 px-5 bg-success text-white">ENTRE</button>
                        <button type="button" class="button3 mx-4 px-3 bg-primary text-white">ENTRE COM
                          FACEBOOK</button>
                      </div>
                      <a href="">Esqueceu sua senha?</a>
                    </form>

                  </div>

                </div>
              </div>
            </div>


            <button type="button" class="btn  " data-toggle="modal" data-target="#procura"><img class="icons"
              src="img/search-24px.svg" width="10px" alt="procurar"></button>

          <div class="modal fade" id="procura" tabindex="-1" role="dialog" aria-labelledby="procuraLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div>
                  <button type="button m-5" class="close pr-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>



                  <form>
                    <div class="form-group pt-4 px-3">
                      <div class="d-flex">
                        <input type="text" class="form-control" id="pesquisa" aria-describedby="pesquisaHelp"
                          placeholder="pesquisa">
                        <button type="submit" class="btn btn-outline-light px-2 pt-0" data-toggle="modal"
                          data-target="#procura"><img class="icons" src="img/search-24px.svg" alt="procurar"></button>
                      </div>
                    </div>

                  </form>

                </div>

              </div>
            </div>
          </div>



        <li><a class="icons" href=""><img class="icons" src="img/like_favorite_heart_5759.png" alt="coracao"></a>
        </li>
        <li><a class="icons" href="compras.html"><img class="icons" src="img/local_mall-24px.svg" alt="bolca"></a>
        </li>
      </ul>
    </div>

  </div>


      <nav class="navbar navbar-expand-lg navbar-light menu-bar ">
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
                  <a class="dropdown-item" href="pinturas21.html">TODOS</a>
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
            <li class="nav-item dropdown mr-5 ">
              <a class="nav-link  text-danger" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Leilão
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    @yield('conteudo')

    <!-- ========================================== inicio do footer ===================================== -->

  <nav class="container navbar navbar-expand-lg navbar-light naves ">
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







  <footer class="form-group ">
    <div>
      <h2>Sociedade an{}nima</h2>
    </div>
    <div>
      <h3>@2019 LOGO|DIGITAL HOUSE|ALL RIGHTS RESERVD</h3>
    </div>
    <div>
      <a href=""><img src="./img/FB_icon-icons.com_65484.png" alt="facebook"></a>
      <a href=""><img src="./img/instagram_icon-icons.com_49943.png" alt="instagram"></a>
      <a href=""><img src="./img/icons8-pinterest-50.png" width="29px" alt="pintrest"></a>
      <a href=""><img src="./img/twitter-3_icon-icons.com_50735.png" alt="twitter"></a>
    </div>
  </footer>
  </div>
  <!-- ========================================== fim do footer ===================================== -->
</body>


</html>
