

                @if(!Request::is('*/edit'))
                        <div class="form-group ">
                                <label class="font-weight-bold"> Usuario --->    {{$user->name}}   {{$user->id}}</label>
                                <input type="hidden" name="user_id" value="{{$user->id }}" class="form-control py-3">
                                <div>{{ $errors->first('user_id')}}</div>
                            </div>

                @else

                            <input type="hidden" name="id" value="{{$endereco->id }}" class="form-control py-3">
                            <input type="hidden" name="user_id" value="{{$endereco->user_id}}" class="form-control py-3">


                @endif

            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" name="cep" value="{{old('cep') ?? $endereco->cep }}" class="form-control">
                <div>{{ $errors->first('cep')}}</div>
            </div>


                <div class="form-group">
                <label for="rua">Rua</label>
                <input type="text" name="rua" value="{{old('rua') ?? $endereco->rua }}" class="form-control">
                <div>{{ $errors->first('rua')}}</div>
            </div>

            <div class="form-group">
                <label for="numero">Numero</label>
                <input type="number" name="numero" value="{{old('numero') ?? $endereco->numero }}" class="form-control">
                <div>{{ $errors->first('numero')}}</div>
            </div>

            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" value="{{old('complemento') ?? $endereco->complemento }}" class="form-control">
                <div>{{ $errors->first('complemento')}}</div>
            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" value="{{old('bairro') ?? $endereco->bairro }}" class="form-control">
                <div>{{ $errors->first('bairro')}}</div>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" value="{{old('cidade') ?? $endereco->cidade }}" class="form-control">
                <div>{{ $errors->first('cidade')}}</div>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" name="estado" value="{{old('estado') ?? $endereco->estado }}" class="form-control">
                <div>{{ $errors->first('estado')}}</div>
            </div>

            <div class="form-group">
                <label for="pais">Pais</label>
                <input type="text" name="pais" value="{{old('pais') ?? $endereco->pais }}" class="form-control">
                <div>{{ $errors->first('pais')}}</div>
            </div>



            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
     </div>

</div>




