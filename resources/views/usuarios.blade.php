{{$texto}} <br>
@if($checagem == true)
    Checagem = true <br>
@else
    Checagem = false <br>
@endif


@foreach( $usuarios as $usuario)
    {{$usuario}} <br>
@endforeach

