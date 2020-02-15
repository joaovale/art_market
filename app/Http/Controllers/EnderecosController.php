<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use App\User;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Http\Controllers\Controller;

class EnderecosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    $enderecos = Endereco::all();

    //    $artista = DB::table('artistas')->where('id', 1)->first();

        return view('enderecos.index', ['enderecos' => $enderecos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $user = auth()->user();

        $endereco = new \App\Endereco([

        ]);
        return view('enderecos.create',compact('endereco', 'user' ));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(endereco $endereco)
    {

        $data = $this->validateRequest();

       $endereco = Endereco::create($data);

        \Session::flash('mensagem_sucesso','endereco cadastrado com sucesso');

        return Redirect('enderecos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(endereco $endereco)
    {

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $enderecos= Endereco::where('user_id', $user_login_id)->get();


        return view('enderecos.show', compact('endereco' ));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(endereco $endereco) {

        $user = auth()->user();


        return view('enderecos.edit',['endereco' => $endereco],['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(endereco $endereco)
    {

        $data = $this->validateRequest();

        $endereco -> update($data);

        return redirect('/enderecos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(endereco $endereco)
    {
        $endereco->delete();

        return redirect('enderecos');
    }

    private function validateRequest()
    {

        return request()->validate([

        'cep' => 'required',
        'rua' => 'required',
        'numero' => 'required',
        'complemento' => 'required',
        'bairro' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
        'pais' => 'required',
       'user_id' => 'required'

       ]);


    }
}
