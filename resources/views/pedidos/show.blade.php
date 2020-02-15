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

    <!-- Mostra dados da pedido-->

    <div class="card" style="width: 18rem">
  <div class="card-body">
    <p><strong>Numero do Pedido:  </strong>{{ $pedido->id }}</p>
    <p><strong>Data do Pedido:  </strong>{{ $pedido->data_pedido }}</p>
    <p><strong>Data da Entrega:  </strong>{{ $pedido->data_entrega}}</p>
    <p><strong>Valor do frete:  </strong>{{ $pedido->frete }}</p>
    <a href="/pedidos" class="card-link btn btn-primary">Voltar</a>

  </div>
</div>



@endsection

