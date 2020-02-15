<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
use Illuminate\Support\Facades\Storage;
use Redirect;
use App\Http\Controllers\Controller;

class CategoriasController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categorias = categoria::all();

        return view('categorias.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        $categoria = new \App\categoria([

        ]);
        return view('categorias.create',compact('categoria'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoria $categoria)
    {
         $data = $this->validateRequest();

       $categoria = categoria::create($data);

        \Session::flash('mensagem_sucesso','categoria cadastrado com sucesso');

        return Redirect('categorias/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {


        return view('categorias.index', compact('categoria'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria $categoria) {


        return view('categorias.edit', compact('categoria',['categoria' => $categoria]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(categoria $categoria)
    {

        $data = $this->validateRequest();

        $categoria -> update($data);

        return Redirect::to('categorias/'.$categoria->id.'/edit');

        // return redirect('categorias.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoria $categoria)
    {
        $categoria->delete();

        return redirect('categorias');
    }

    private function validateRequest()
    {

        return request()->validate([

            'nome'=> 'required|min:3',
            'definicao'=> 'required',

       ]);


    }
}
