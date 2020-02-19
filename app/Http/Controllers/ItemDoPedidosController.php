<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
Use App\Pedido;
Use App\itemDoPedido;
use App\User;
use App\Obra;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Http\Controllers\Controller;


class ItemDoPedidosController extends Controller
{
    public function index()
    {


    $itemDoPedidos = itemDoPedido::all();


        return view('itemDoPedidos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $obras = User::find($user_login_id)->obras()->get();


        $pedido = new \App\Pedido([
            'data_pedido' => now(),
            'data_entrega' => now(),
            'frete' => 10,
            'entrega' => 'Em 5 dias',
            'user_id' =>  $user = auth()->user()->id

            ]);

            $pedido -> save();


        $itemDoPedido = new \App\itemDoPedido([

        ]);

        return view('itemDoPedidos.create',compact('itemDoPedido', 'obras', 'pedido' ));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(itemDoPedido $itemDoPedido)
    {

        $data = $this->validateRequest();

       $itemDoPedido = itemDoPedido::create($data);

        \Session::flash('mensagem_sucesso','itemDoPedido cadastrado com sucesso');

        return Redirect('itemDoPedidos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(itemDoPedido $itemDoPedido)
    {

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $itemDoPedidos= itemDoPedido::where('user_id', $user_login_id)->get();


        return view('itemDoPedidos.show', compact('itemDoPedido' ));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(itemDoPedido $itemDoPedido) {

        $user = auth()->user();


        return view('itemDoPedidos.edit',['itemDoPedido' => $itemDoPedido],['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(itemDoPedido $itemDoPedido)
    {

        $data = $this->validateRequest();

        $itemDoPedido -> update($data);

        return redirect('/itemDoPedidos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(itemDoPedido $itemDoPedido)
    {
        $itemDoPedido->delete();

        return redirect('itemDoPedidos');
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
