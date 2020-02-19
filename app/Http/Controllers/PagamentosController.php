<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\user;
use App\obra;
use App\obra_user;
use App\itemPedido;
use App\artista;
use App\categoria;
use App\estilo;
use App\pedido;
use App\pagamento;
use App\carrinho;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Redirect;
use App\Http\Controllers\Controller;

class PagamentosController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pagamentos = pagamento::all();

        return view('pagamentos.index', ['pagamentos' => $pagamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_login_id = auth()->user()->id;

        $pedidos= Pedido::all();
        $pedido= DB::table('pedidos')->where('id', $user_login_id)->first();

        $pagamento = new \App\pagamento([

        ]);
        return view('pagamentos.create',compact('pagamento','pedido'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(pagamento $pagamento)
    {
         $data = $this->validateRequest();

       $pagamento = pagamento::create($data);

        \Session::flash('mensagem_sucesso','pagamento cadastrado com sucesso');

        return Redirect('pagamentos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pagamento $pagamento)
    {


        return view('pagamentos.index', compact('pagamento'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pagamento $pagamento) {


        return view('pagamentos.edit', compact('pagamento',['pagamento' => $pagamento]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(pagamento $pagamento)
    {

        $data = $this->validateRequest();

        $pagamento -> update($data);

        return Redirect::to('pagamentos/'.$pagamento->id.'/edit');

        // return redirect('pagamentos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pagamento $pagamento)
    {
        $pagamento->delete();

        return redirect('pagamentos');
    }

    private function validateRequest()
    {

        return request()->validate([

            'n_cartao'=> 'required',
            'nome'=> 'required|min:3',
            'codigo_seguranca'=> 'required',
            'pedido_id'=> 'required',

       ]);


    }
}
