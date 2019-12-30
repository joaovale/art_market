<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use Redirect;
use App\Http\Controllers\Controller;



class ClientesController extends Controller
{

    public function index()

    {

        $clientes = cliente::get();

        return view('clientes.lista', ['clientes' => $clientes]);
    }

    public function novo()
    {
        return view('clientes.formulario');
    }

    public function salvar(Request $request)
    {
        $cliente = new cliente();

        $cliente = $cliente -> create($request->all());

        \Session::flash('mensagem_sucesso','Cliente cadastrado com sucesso');

        return Redirect::to('clientes/novo');

    }

    public function editar($id)
    {

        $cliente = cliente::findOrFail($id);

        return view('clientes.formulario',['cliente' => $cliente]);
    }

    public function atualizar($id, Request $request)
    {
        \Session::flash('mensagem_sucesso','Cliente cadastrado com sucesso');

        $cliente = cliente::findOrFail($id);

        $cliente->update($request->all());

        \Session::flash('mensagem_sucesso','Cliente atualizado com sucesso');

        return Redirect::to('clientes/'.$cliente->id.'/editar');

    }

    public function deletar($id)
    {
        $cliente = cliente::findOrFail($id);

       $cliente->delete();

       \Session::flash('mensagem_sucesso','Cliente excluido com sucesso');

        return Redirect::to('clientes/');

    }


}
