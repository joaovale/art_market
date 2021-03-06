

@if(!Request::is('*/edit'))
           <div class="form-group">
                <label class="font-weight-bold"> Proprietários --->    {{$user->name}}</label>
                <input type="hidden" name="user_id" value="{{$user->id }}" class="form-control py-3">
                <div>{{ $errors->first('user_id')}}</div>
            </div>

@else

            <input type="hidden" name="id" value="{{$obra->id }}" class="form-control py-3">
            <!-- <input type="hidden" name="artista_id" value="{{$obra->artista_id }}" class="form-control py-3"> -->

 @endif


            <div class="form-group">
                <label for="nome">Nome da Obra</label>
                <input type="text" name="nome" value="{{old('nome') ?? $obra->nome }}" class="form-control">
                <div>{{ $errors->first('nome')}}</div>
            </div>

<!-- //  Artista   -->

<div class="form-group">
                <label for="artista_id">Artista</label>
                <select name="artista_id" id="artista_id" class="form-control">
                @foreach($artistas as $artista)

                <option value="{{$artista->id}}" {{ $artista->id == $obra->artista_id ? 'selected' : ''}}>{{$artista->nome_artista}}</option>

                @endforeach

                </select>
                <div>{{ $errors->first('artista_id')}}</div>
            </div>




            <div class="form-group">
                <label for="sobre">Sobre a Obra</label>
                <input type="text" name="sobre" value="{{old('sobre') ?? $obra->sobre }}" class="form-control">
                <div>{{ $errors->first('sobre')}}</div>

            </div>

            <div class="form-group">
                <label for="preco">Preco</label>
                <input type="number" name="preco" value="{{old('preco') ?? $obra->preco }}" class="form-control">
                <div>{{ $errors->first('preco')}}</div>
            </div>

            <div class="form-group">
                <label for="tamanho">Tamanho</label>
                <input type="number" name="tamanho" value="{{old('tamanho') ?? $obra->tamanho }}" class="form-control">
                <div>{{ $errors->first('tamanho')}}</div>
            </div>

            <div class="form-group">
                <label for="data_criacao">Criação</label>
                <input type="date" name="data_criacao" value="{{old('data_criacao') ?? $obra->data_criacao }}" class="form-control">
                <div>{{ $errors->first('data_criacao')}}</div>
            </div>

            <div class="form-group">
                <label for="estoque">Estoque</label>
                <input type="number" name="estoque" value="{{old('estoque') ?? $obra->estoque }}" class="form-control">
                <div>{{ $errors->first('estoque')}}</div>
            </div>

            <div class="form-group">
                <label for="categoria_id">Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-control">
                @foreach($categorias as $categoria)

                <option value="{{ $categoria->id}}" {{ $categoria->id == $obra->categoria_id ? 'selected' : ''}}>{{$categoria->nome}}</option>

                @endforeach

                </select>
                <div>{{ $errors->first('categoria_id')}}</div>
            </div>


            <div class="form-group">
                <label for="estilo_id">Estilo</label>
                <select name="estilo_id" id="estilo_id" class="form-control">
                @foreach($estilos as $estilo)

                <option value="{{ $estilo->id}}" {{ $estilo->id == $obra->estilo_id ? 'selected' : ''}}>{{$estilo->nome}}</option>

                @endforeach

                </select>
                <div>{{ $errors->first('estilo_id')}}</div>
            </div>

            @if(!Request::is('*/edit'))
                <div class="form-group d-flex flex-column">
                    <label for="foto">Foto Up-load</label>
                    <input type="file" name="foto"  class="py-3">
                    <div>{{ $errors->first('foto')}}</div>
                </div>
            @else
            <div class="row">
                <div class="card col-3 " style="width: 50px;">
                    <img src="{{$obra->foto}}" alt="sem foto" class= "img-thumbnail">

                    <input type="hidden" name="foto" value="{{$obra['foto']}}" class="py-3">
                    <!-- <input type="file" name="foto"  class="py-3"> -->

                </div>
            </div>
            @endif


            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </div>
     </div>

</div>




