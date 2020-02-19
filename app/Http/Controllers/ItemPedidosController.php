<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\itemPedido;
use App\obra;
use App\pedido;
use App\carrinho;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Redirect;
use App\Http\Controllers\Controller;

class ItemPedidosController extends Controller
{
    public function index()
    {


    $itemPedidos = ItemPedido::all();


        return view('itemPedidos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $itemPedido = new \App\itemPedido([

        ]);

        return view('itemPedidos.create',compact('itemPedido', 'obras', 'pedido' ));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(itemPedido $itemPedido)
    {

        $data = $this->validateRequest();

       $itemPedido = itemPedido::create($data);

        \Session::flash('mensagem_sucesso','itemPedido cadastrado com sucesso');

        return Redirect('itemPedidos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(itemPedido $itemPedido)
    {

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $itemPedidos= itemPedido::where('user_id', $user_login_id)->get();


        return view('itemPedidos.show', compact('itemPedido' ));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(itemPedido $itemPedido) {

        $user = auth()->user();


        return view('itemPedidos.edit',['itemPedido' => $itemPedido],['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(itemPedido $itemPedido)
    {

        $data = $this->validateRequest();

        $itemPedido -> update($data);

        return redirect('/itemPedidos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(itemPedido $itemPedido)
    {
        $itemPedido->delete();

        return redirect('itemPedidos');
    }

    private function validateRequest()
    {

        return request()->validate([


            'valor_unitario' => 'required',
            'quantidade' => 'required',
            'pedido_id' => 'required',
            'obra_id' => 'required',

       ]);

    }
}
