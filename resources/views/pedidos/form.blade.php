

                @if(!Request::is('*/edit'))
                        <div class="form-group ">
                                <label class="font-weight-bold"> Usuario --->    {{$user->name}}   {{$user->id}}</label>
                                <input type="hidden" name="user_id" value="{{$user->id }}" class="form-control py-3">
                                <div>{{ $errors->first('itemPedido_id')}}</div>
                            </div>



                @else

                            <input type="hidden" name="id" value="{{$pedido->id }}" class="form-control py-3">
                            <input type="hidden" name="user_id" value="{{$pedido->user_id}}" class="form-control py-3">



                @endif

            <div class="form-group">
                <label for="data_pedido">Data_pedido</label>
                <input type="date" name="data_pedido" value="{{old('data_pedido') ?? $pedido->data_pedido }}" class="form-control">
                <div>{{ $errors->first('data_pedido')}}</div>
            </div>


            <div class="form-group">
                <label for="data_entrega">Data da entrega</label>
                <input type="date" name="data_entrega" value="{{old('data_entrega') ?? $pedido->data_entrega }}" class="form-control">
                <div>{{ $errors->first('data_entrega')}}</div>
            </div>

            <div class="form-group">
                <label for="frete">Valor do frete</label>
                <input type="number" name="frete" value="{{old('frete') ?? $pedido->frete }}" class="form-control">
                <div>{{ $errors->first('frete')}}</div>
            </div>

            <div class="form-group">
                <label for="entrega">Entrega</label>
                <input type="text" name="entrega" value="{{old('entrega') ?? $pedido->entrega }}" class="form-control">
                <div>{{ $errors->first('entrega')}}</div>
            </div>

            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
     </div>

</div>




