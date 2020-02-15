



            <div class="form-group">
                <label for="nome">Nome do Estilo</label>
                <input type="text" name="nome" value="{{old('nome') ?? $estilo->nome }}" class="form-control">
                <div>{{ $errors->first('nome')}}</div>
            </div>

            <div class="form-group">
                <label for="definicao">Definicao</label>
                <input type="text" name="definicao" value="{{old('definicao') ?? $estilo->definicao }}" class="form-control">
                <div>{{ $errors->first('definicao')}}</div>
            </div>


            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
     </div>

</div>




