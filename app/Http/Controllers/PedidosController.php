<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
Use App\Pedido;
Use App\itemDoPedido;
use App\User;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Http\Controllers\Controller;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



    $pedidos = Pedido::all();




        return view('pedidos.index', compact('pedidos', 'users' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $pedido = new \App\Pedido([
            'data_pedido' => now(),
            'data_entrega' => now(),
            'frete' => 10,
            'entrega' => 'Em 5 dias',
            'user_id' =>  $user = auth()->user()->id

            ]);

            $pedido -> save();

            dd($pedido->id);


        return redirect()->route('itemPedidos.create', compact('pedido'));

        // $user = auth()->user();

        // $pedido = new \App\Pedido([

        // ]);

        // return view('pedidos.create',compact('pedido', 'user' ));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(pedido $pedido)
    {
        $data = $pedido;
        dd($data);

        $pedido = Pedido::create($data);

        dd($pedido);

        \Session::flash('mensagem_sucesso','pedido cadastrado com sucesso');

        // return Redirect('itemDoPedidos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pedido $pedido)
    {

        $user_login_id = auth()->user()->id;
        $user = auth()->user();

        $pedidos= pedido::where('user_id', $user_login_id)->get();




        return view('pedidos.show', compact('pedido', 'user' ));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedido) {

        $user = auth()->user();


        return view('pedidos.edit',['pedido' => $pedido],['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(pedido $pedido)
    {

        $data = $this->validateRequest();

        $pedido -> update($data);

        return redirect('/pedidos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedido $pedido)
    {
        $pedido->delete();

        return redirect('pedidos');
    }

    private function validateRequest()
    {

        return request()->validate([


            'data_pedido' => 'required',
            'data_entrega' => 'required',
            'frete' => 'required',
            'entrega' => 'required',
            'user_id' => 'required'

       ]);


    }
}
