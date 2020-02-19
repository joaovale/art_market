

@if(!Request::is('*/edit'))
           <div class="form-group">
                <label class="font-weight-bold"> Proprietários --->    {{$pedido->id}}</label>
                <input type="hidden" name="pedido_id" value="{{$pedido->id }}" class="form-control py-3">
                <input type="hidden" name="obra_id" value="{{$obra->id }}" class="form-control py-3">
            </div>

@else

            <input type="hidden" name="id" value="{{$itemDoPedido->id }}" class="form-control py-3">
            <input type="hidden" name="pedido_id" value="{{$itemDoPedido->pedido_id }}" class="form-control py-3">
            <input type="hidden" name="obra_id" value="{{$itemDoPedido->obra_id }}" class="form-control py-3">

 @endif


<!-- //  itemDoPedido   -->

<div class="form-group">

            <div class="form-group">
                <label for="valor_unitario">Valor Unitário</label>
                <input type="number" name="valor_unitario" value="{{old('valor_unitario') ?? $itemDoPedido->valor_unitario }}" class="form-control">
                <div>{{ $errors->first('valor_unitario')}}</div>

            </div>

            <div class="form-group">
                <label for="quantidade">Quatidade</label>
                <input type="text" name="quantidade" value="{{old('quantidade') ?? $itemDoPedido->quantidade }}" class="form-control">
                <div>{{ $errors->first('quantidade')}}</div>
            </div>


            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
     </div>

</div>



