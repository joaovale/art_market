<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\user;
use App\obra;
use App\obra_user;
use App\itemPedido;
use App\artista;
use App\categoria;
use App\estilo;
use App\carrinho;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Redirect;
use App\Http\Controllers\Controller;


class ObrasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //    $artistas = artista::all();



       $obras = obra::all();


        return view('obras.index', ['obras' => $obras]);
    }

    public function select_categoria($id)
    {

        $categorias = Categoria::all();

        $categorias= DB::table('categorias')->where('id', $id)->first();
        $categoria_id = $categorias->id;


        $itemPedido= ItemPedido::all();
        $obras = DB::table('obras')->where('categoria_id', $categoria_id)->get();

        $estilos = Estilo::all();


       $artistas = artista::all();


        return view('obras.index', compact('user','categorias','artistas','estilo'),['obras' => $obras]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        // // $artista = Artista::all();

        // $artista = DB::table('artistas')->where('artista_id', 1)->first();

        // dd($artista);

        // return view('obras.create',['artista' => $artista])

        $categorias = Categoria::all();

        $estilos = Estilo::all();

        $user = auth()->user();

        $artistas = Artista::all();

        $obra = new \App\Obra([

        ]);
        return view('obras.create',compact('obra','categorias', 'artistas', 'user', 'estilos', 'itemPedido' ));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(obra $obra)
    {
         $data = $this->validateRequest();

        $path = request()->file('foto')->store('public');

        $data['foto'] = Storage::disk('public')->url(basename($path));

       $obra = obra::create($data);

        \Session::flash('mensagem_sucesso','Obra cadastrado com sucesso');

        return Redirect('obras/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(obra $obra)
    {

        $artistas = Artista::all();


        return view('obras.show', compact('obra','categoria', 'artistas', 'estilo'  ));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Obra $obra) {

        $user = auth()->user();

        $categorias = Categoria::all();

        $estilos = Estilo::all();

        $artistas = Artista::all();

        return view('obras.edit', compact('obra','categorias', 'artistas', 'user',  'estilos' , ['obra' => $obra],['user' => $user]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Obra $obra)
    {

        $data = $this->validateRequest();

        // $path = request()->file('foto')->store('public');

        // $data['foto'] = Storage::disk('public')->url(basename($path));

        $obra -> update($data);

        return redirect('obras/'. $obra->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(obra $obra)
    {
        $obra->delete();

        return redirect('obras');
    }

    private function validateRequest()
    {

        return request()->validate([

            'nome'=> 'required|min:3',
            'sobre'=> 'required',
            'preco'=> 'required',
            'tamanho'=> 'required',
            'data_criacao'=> 'required',
            'estoque' => 'required',
            'artista_id' => 'required',
            'categoria_id'=> 'required',
            'estilo_id'=> 'required',
            'itemPedido_id'=> 'required',
            'foto'=>  'required',

       ]);


    }
}
