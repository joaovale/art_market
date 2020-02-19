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



    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Obras de Arte
                <a class="float-right" href="{{ url('/carrinhos')}}">Meu carrinho</a>
                <a class="float-right" href="">/_____________________/<div class=""></div></a>
                <a class="float-right" href="{{url('obras/create')}}">Cadastrar nova Obra de Arte</a>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row justify-content-center">
    <div class="col-12"> -->
    <div class="container my-3 mt-5">

      <div class="row">


                    @foreach($obras as $obra)


        <div class="col-md-6 col-lg-3 mb-sm-3">
          <div class="card h-100">
          <img style="max-height: 260px" src="{{$obra->foto}}" href="/obras/{{$obra->id}}" class="card-img" alt="Não há foto">
            <div class="card-body  m-3">
              <h5 class="card-text">{{$obra ->  nome}}</h5>

              <p class="card-text">Categoria:   {{$obra -> categoria -> nome}}</p>
              <p class="card-text">Estilo:   {{$obra -> estilo ->nome}}</p>
              <p class="card-text">Autor:   {{$obra -> artista ->nome_artista}}</p>
              <p class="card-text">Dimensões: {{$obra ->  tamanho}}</p>


              <p class="card-text">Preço R$ {{$obra ->  preco}}</p>
              <div class="d-flex flex-row-reverse">
                <a class="icons" href="compras.html">
                <a href="/obras/{{$obra->id}}" class="card-link btn btn-primary">Detahes</a>
                <a href="carrinhos/{{$obra->id}}" class="card-link btn btn-primary">Carrinho</a>
                <img class="icons" src="img/icons/mais bolça.svg" width="23px" alt="bolça">
                </a>
                </li>
                <a class="icons" href="/carrinho">
                  <img class="icons" src="img/local_mall-24px.svg" alt="bolca">
                </a>
              </div>
            </div>
          </div>
        </div>


                    @endforeach




                    <!-- </tbody>

    </table> -->
    </div>
</div>
<!-- </div> -->

@endsection

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

