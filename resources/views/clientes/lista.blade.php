@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Clientes
                <a class="float-right" href="{{url('clientes/novo')}}">Novo Cliente</a>
                </div>
                <div class="card-body">
                @if(Session::has('mensagem_sucesso'))

                        <div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}}</div>

                @endif

                  <table class="table">
                    <th>Nome</th>
                    <th>Enedereço</th>
                    <th>Numero</th>
                    <!-- <th>Id</th> -->
                    <th>Ações</th>

                    <tbody>

                    @foreach($clientes as $cliente)

                      <tr>
                        <td>{{$cliente -> nome}}</td>
                        <td>{{$cliente -> endereco}}</td>
                        <td>{{$cliente -> numero}}</td>
                        <!-- <td>{{$cliente -> id}}</td> -->
                        <td>
                            <a href= "/clientes/{{$cliente -> id}}/editar" class="btn btn-default btn-sm">Editar</a>

                            {!! Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline;'])!!}

                                <button type="submit" class="btn btn-default btn-sm">Excluir</button>


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
