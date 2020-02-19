

                @if(!Request::is('*/edit'))
                        <div class="form-group ">
                                <label class="font-weight-bold"> Pedido --->    {{$pedido->id}}   {{$obra->id}}</label>
                                <input type="hidden" name="pedido_id" value="{{$pedido->id }}" class="form-control py-3">
                                <input type="hidden" name="obra_id" value="{{$obra->id }}" class="form-control py-3">
                                <div>{{ $errors->first('itemPedido_id')}}</div>
                            </div>



                @else

                            <input type="hidden" name="id" value="{{$itemPedido->id }}" class="form-control py-3">
                            <input type="hidden" name="pedido_id" value="{{$itemPedido->pedido_id}}" class="form-control py-3">
                            <input type="hidden" name="obra_id" value="{{$itemPedido->obra_id}}" class="form-control py-3">


                @endif

            <div class="form-group">
                <label for="data_pedido">Valor Unitário</label>
                <input type="date" name="valor_unitario" value="{{old('valor_unitario') ?? $pedido->valor_unitario }}" class="form-control">
                <div>{{ $errors->first('valor_unitario')}}</div>
            </div>


            <div class="form-group">
                <label for="data_entrega">Quantidade</label>
                <input type="date" name="quantidade" value="{{old('quantidade') ?? $pedido->quantidade }}" class="form-control">
                <div>{{ $errors->first('quantidade')}}</div>
            </div>



            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
     </div>

</div>




