

@if(!Request::is('*/edit'))
           <div class="form-group">
                <label class="font-weight-bold"> Proprietários --->    {{$pedido->id}}</label>
                <input type="hidden" name="pedido_id" value="{{$pedido->id }}" class="form-control py-3">
                <div>{{ $errors->first('pedido_id')}}</div>
            </div>

@else

            <input type="hidden" name="id" value="{{$pagamento->id }}" class="form-control py-3">
            <input type="hidden" name="pedido_id" value="{{$pagamento->pedido_id }}" class="form-control py-3"> -->

 @endif


<!-- //  Pagamento   -->

<div class="form-group">

            <div class="form-group">
                <label for="n_cartao">Número do Cartao</label>
                <input type="text" name="n_cartao" value="{{old('n_cartao') ?? $pagamento->n_cartao }}" class="form-control">
                <div>{{ $errors->first('n_cartao')}}</div>

            </div>

            <div class="form-group">
                <label for="nome">Nome no Cratão</label>
                <input type="text" name="nome" value="{{old('nome') ?? $pagamento->nome }}" class="form-control">
                <div>{{ $errors->first('nome')}}</div>
            </div>

            <div class="form-group">
                <label for="codigo_seguranca">Codigo de segurança</label>
                <input type="number" name="codigo_seguranca" value="{{old('codigo_seguranca') ?? $pagamento->codigo_seguranca }}" class="form-control">
                <div>{{ $errors->first('codigo_seguranca')}}</div>
            </div>


            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
     </div>

</div>



