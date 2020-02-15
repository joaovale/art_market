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

<


<div class="container">

<!-- @if(Session::has('mensagem_sucesso'))

            <div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}}</div>

@endif -->

    <div class="row justify-content-center">
    <div class="col-8">

    <!-- Mostra dados da Obra-->

    <div class="card" style="width: 18rem">
    <img src="{{$obra->foto}}" alt="sem foto" class= "img-thumbnail">
  <div class="card-body">
    <p><strong>Nome:  </strong>{{ $obra->nome }}</p>
    <p><strong>Nome do artista:  </strong>{{ $obra->artista->nome_artista }}</p>
    <p><strong>Categoria:  </strong>{{ $obra->categoria->nome }}</p>
    <p class= "card-text" ><strong>Sobre:  </strong>{{ $obra->sobre }}</p>
    <p><strong>Preco:  </strong>{{ $obra->preco }}</p>
    <p><strong>Data de criação:  </strong>{{ $obra->data_criacao }}</p>
    <a href="/obras/{{ $obra->id}}/edit" class="card-link btn btn-primary">Editar</a>
    <form action="/obras/{{ $obra->id }}" method="POST" >

                        @method('DELETE')
                        @csrf
                        <button class="card-link btn btn-danger float-right" type="submit">Deletar</button>

    </form>
  </div>
</div>



@endsection

