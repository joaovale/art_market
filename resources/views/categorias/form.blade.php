



            <div class="form-group">
                <label for="nome">Nome da Categoria</label>
                <input type="text" name="nome" value="{{old('nome') ?? $categoria->nome }}" class="form-control">
                <div>{{ $errors->first('nome')}}</div>
            </div>

            <div class="form-group">
                <label for="sobre">Definicao</label>
                <input type="text" name="definicao" value="{{old('definicao') ?? $categoria->definicao }}" class="form-control py-5">
                <div>{{ $errors->first('sobre')}}</div>
            </div>


            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
     </div>

</div>




