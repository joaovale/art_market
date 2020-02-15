<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estilo;
use Illuminate\Support\Facades\Storage;
use Redirect;
use App\Http\Controllers\Controller;

class EstilosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $estilos = estilo::all();

        return view('estilos.index', ['estilos' => $estilos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        $estilo = new \App\estilo([

        ]);
        return view('estilos.create',compact('estilo'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(estilo $estilo)
    {
         $data = $this->validateRequest();

       $estilo = estilo::create($data);

        \Session::flash('mensagem_sucesso','Estilo cadastrado com sucesso');

        return Redirect('estilos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(estilo $estilo)
    {


        return view('estilos.index', compact('estilo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(estilo $estilo) {


        return view('estilos.edit', compact('estilo',['estilo' => $estilo]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(estilo $estilo)
    {

        $data = $this->validateRequest();

        $estilo -> update($data);

        return Redirect::to('estilos/'.$estilo->id.'/edit');

        // return redirect('estilos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(estilo $estilo)
    {
        $estilo->delete();

        return redirect('estilos');
    }

    private function validateRequest()
    {

        return request()->validate([

            'nome'=> 'required|min:3',
            'definicao'=> 'required',

       ]);


    }
}
