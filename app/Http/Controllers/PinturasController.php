<?php

namespace App\Http\Controllers;

use App\Pinturas;
use Illuminate\Http\Request;

class PinturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pinturas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pinturas  $pinturas
     * @return \Illuminate\Http\Response
     */
    public function show(Pinturas $pinturas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pinturas  $pinturas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pinturas $pinturas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pinturas  $pinturas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pinturas $pinturas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pinturas  $pinturas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinturas $pinturas)
    {
        //
    }
}
