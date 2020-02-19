<!-- link rel="stylesheet" href="/../css/home1.css"> -->
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
                Pedido
                <a class="float-right" href="{{url('pedidos/create')}}">Cadastrar novo pedido</a>
                </div>
                <div class="card-body">
                @if(Session::has('mensagem_sucesso'))

                        <div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}}</div>

                @endif

                  <table class="table">

                  <th>Usuário</th>
                  <th>Numero</th>
                  <th>Data Pedido</th>
                  <th>Data Entrega</th>
                  <th>Entrega</th>
                  <th>Frete</th>


                    <!-- <th>Id</th> -->
                    <!-- <th>Ações</th> -->

                    <tbody>

                    @foreach($pedidos as $pedido)

                      <tr>

                        <td>{{$pedido->user->name}}</td>
                        <td>{{$pedido -> id}}</td>
                        <td>{{$pedido -> data_pedido}}</td>
                        <td>{{$pedido -> data_entrega}}</td>
                        <td>{{$pedido -> entrega}}</td>
                        <td>{{$pedido -> frete}}</td>


                        <td>
                            <a href= "/pedidos/{{$pedido -> id}}/edit" class="btn btn-primary btn-sm">Editar</a>
                            <a href= "/pedidos/{{$pedido -> id}}" class="btn btn-primary btn-sm">Show</a>

                            {!! Form::open(['method' => 'DELETE', 'url' => '/pedidos/'.$pedido->id, 'style' => 'display: inline;'])!!}

                                <button type="submit" class="btn btn-primary btn-sm">Excluir</button>

                            {!! Form::close()!!}

                        </td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
