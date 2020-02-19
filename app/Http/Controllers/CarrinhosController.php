<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\user;
use App\obra;
use App\obra_user;
use App\artista;
use App\categoria;
use App\estilo;
use App\carrinho;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Redirect;
use App\Http\Controllers\Controller;

class CarrinhosController extends Controller
{


        public function __construct()
        {
            $this->middleware('auth');
        }

        // Commandos do relacionamento many to many - aula 47 e 48

            // Definido os registro relacionados

                // $user = \App\User::find(2);

                // $obras = \App\Obra::all();

            // incluindo o relacionamento

                // $user->obras()-> attach($obras);

            // excluindo o relacionamento

                // $user->obras()-> detach($obras);

            // para o array de obras relacionar o user definido incluir o relacionamento apenas com as obras 3 e 4
            // excluindo todos os outros relacionamentos do user definido

                // $user->obras()-> sync([3,4]);

            //  para o array de obras relacionar o user definido apenas incluir o relacionamento com as obras 3 e 4
            // apenas se o relacionamento ainda nao existe e manter todos os outros relacionamentos do user definido


                // $user->obras()-> syncWithoutDetaching([3,4]);

        // dd($user);

        public function index()
        {

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $obras = User::find($user_login_id)->obras()->get();

       $artistas = artista::all();
       $categorias = Categoria::all();
       $estilos = Estilo::all();

        return view('carrinhos.index', compact('user','categorias','artistas'),['obras' => $obras]);
    }




    public function enviar_carrinho($obra)
    {
        $obras = Obra::findOrFail($obra);
        $obra = $obras->id;

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $user->obras()-> syncWithoutDetaching([$obra]);

        // $user->obras()-> attach($obra);


        return Redirect('/obras');

    }

    public function retirar_carrinho($obra) {

        $obras = Obra::findOrFail($obra);
        $obra = $obras->id;

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $user->obras()-> detach([$obra]);


        return Redirect('/carrinhos');
    }

    public function criarPedido()
        {

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $obras = User::find($user_login_id)->obras()->get();


       $artistas = artista::all();
       $categorias = Categoria::all();
       $estilos = Estilo::all();

        return redirect()->route('pedidos.create',['obras' => $obras]);
    }


}


