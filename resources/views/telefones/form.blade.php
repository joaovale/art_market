


                @if(!Request::is('*/edit'))
                        <div class="form-group ">
                                <label class="font-weight-bold"> Usuario --->    {{$user->name}}   {{$user->id}}</label>
                                <input type="hidden" name="user_id" value="{{$user->id }}" class="form-control py-3">
                                <div>{{ $errors->first('user_id')}}</div>
                            </div>

                @else

                            <input type="hidden" name="id" value="{{$telefone->id }}" class="form-control py-3">
                            <input type="hidden" name="user_id" value="{{$telefone->user_id}}" class="form-control py-3">


                @endif






            <div class="form-group">
                <label for="numero">Numero do Telefone</label>
                <input type="number" name="numero" value="{{old('numero') ?? $telefone->numero }}" class="form-control">
                <div>{{ $errors->first('numero')}}</div>
            </div>

            <div class="form-group">
                <label for="pais">Pais</label>
                <input type="text" name="pais" value="{{old('pais') ?? $telefone->pais }}" class="form-control">
                <div>{{ $errors->first('pais')}}</div>
            </div>


            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
     </div>

</div>




