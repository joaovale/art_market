@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Digite as informacoes do Cliente
                <a class="float-right" href="{{url('clientes')}}">Listagem de Clientes</a>
                </div>

                <div class="card-body">

                    @if(Session::has('mensagem_sucesso'))

                        <div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}}</div>

                    @endif

                    @if(Request::is('*/editar'))

                        {!! Form::model($cliente, ['method' => 'PATCH','url' => 'clientes/'.$cliente->id])!!}

                    @else
                        {!!Form::open(['url' => 'clientes/salvar'])!!}
                    @endif


                    {!! Form::label('nome','Nome')!!}

                    {!! Form::input('text','nome', null,['class' => 'form-control','auto-focus','placeholder' => 'Nome']) !!}

                    {!! Form::label('endereco','Endereço')!!}
                    {!! Form::input('text','endereco', null,['class' => 'form-control','placeholder' => 'Endereço']) !!}

                    {!! Form::label('nome','Número')!!}
                    {!! Form::input('text','numero', null,['class' => 'form-control','placeholder' => 'Numero']) !!}

                    {!! Form::label('obra_id','Obra')!!}
                    <select name="obra_id" id="obra_id" class="form-control">

                        @foreach ($obras as $obra)
                            <option value="{{$obra->id}}" {{ $obra->id == $cliente -> obra_id ? 'selected' : ''}}>{{$obra->nome}} </option>
                        @endforeach
                    </select>






                    {!! Form::submit('Salvar',['class' => 'btn btn-primary']) !!}

                    {!!Form::close()!!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection



