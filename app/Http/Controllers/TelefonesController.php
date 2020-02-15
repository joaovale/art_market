<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telefone;
use App\User;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Http\Controllers\Controller;

class TelefonesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    $telefones = Telefone::all();

    //    $artista = DB::table('artistas')->where('id', 1)->first();

        return view('telefones.index', ['telefones' => $telefones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $user = auth()->user();

        $telefone = new \App\telefone([

        ]);
        return view('telefones.create',compact('telefone', 'user' ));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(telefone $telefone)
    {

        $data = $this->validateRequest();

       $telefone = telefone::create($data);

        \Session::flash('mensagem_sucesso','telefone cadastrado com sucesso');

        return Redirect('telefones/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(telefone $telefone)
    {

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $telefones= Telefone::where('user_id', $user_login_id)->get();


        return view('telefones.show', compact('telefone' ));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(telefone $telefone) {

        $user = auth()->user();


        return view('telefones.edit',['telefone' => $telefone],['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(telefone $telefone)
    {

        $data = $this->validateRequest();

        $telefone -> update($data);

        return redirect('/telefones');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(telefone $telefone)
    {
        $telefone->delete();

        return redirect('telefones');
    }

    private function validateRequest()
    {

        return request()->validate([

            'numero'=> 'required',
            'pais'=> 'required',
            'user_id'=> 'required',
       ]);


    }
}
