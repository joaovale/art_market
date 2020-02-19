<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artista;
use App\User;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Http\Controllers\Controller;



class ArtistasController extends Controller
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

        $artistas = artista::all();


        return view('artistas.index', ['artistas' => $artistas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    //    $users = DB::table('users')->get();

         $user_login_id = auth()->user()->id;

        $user = DB::table('users')->where('id', $user_login_id)->first();

        return view('artistas.create',['user' => $user]);
    }

     /* Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artista = new artista();

        $artista = $artista -> create($request->all());


        \Session::flash('mensagem_sucesso','Cliente cadastrado com sucesso');

        return Redirect::to('artistas/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $artista = artista::findOrFail($id);

        $user = DB::table('users')->where('id', $artista->user_id)->first();

        return view('artistas.create',['artista' => $artista ,'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Session::flash('mensagem_sucesso','Cliente cadastrado com sucesso');

        $artista = artista::findOrFail($id);
        $artista->update($request->all());


        \Session::flash('mensagem_sucesso','Artista atualizado com sucesso');

        return Redirect::to('artistas/'.$artista->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artista = artista::findOrFail($id);

       $artista->delete();

       \Session::flash('mensagem_sucesso','Artista excluido com sucesso');

        return Redirect::to('artistas/');
    }
}
