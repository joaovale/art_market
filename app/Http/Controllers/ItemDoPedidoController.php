<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
Use App\Pedido;
Use App\itemDoPedido;
use App\User;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ItemDoPedidoController extends Controller
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

       $artistas = artista::all();
       $categorias = Categoria::all();
       $estilos = Estilo::all();

       @foreach($obras as $obra)

        $itemDoPedido = new \App\itemDoPedido([
            'valor_unitario' => '$obras->preco',
            'quantidade' => 1,
            'pedido_id' => '$pedido ->id',
            'obra_id' => 'obras->id',
        ]);
        @endforeach

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
