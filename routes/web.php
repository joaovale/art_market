<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index');


// Route::get('/', 'HomeController@index')->name('home');

// CURD Artistas

Route::get('/artistas', 'ArtistasController@index');

Route::get('/artistas/create', 'ArtistasController@create');

Route::get('/artistas/{artista}/edit', 'ArtistasController@edit');

Route::post('/artistas/store', 'ArtistasController@store');

Route::patch('/artistas/{artista}', 'ArtistasController@update');

Route::delete('/artistas/{artista}', 'ArtistasController@destroy');

// Route::resource('artistas','ArtistasController');


Route::get('/o', function() {

    $user = auth()->user()->id;

        $obras = \App\obra::All();

        $user->obras()->attach($obras);

        dd($obras);
});

// CRUD Obras

Route::get('/obras/create', 'ObrasController@create');
Route::post('/obras/store', 'ObrasController@store');
Route::get('/obras', 'ObrasController@index');
Route::get('obras/{obra}', 'ObrasController@show');
Route::get('obras/{obra}/edit', 'ObrasController@edit');
Route::patch('obras/{obra}', 'ObrasController@update');
Route::delete('/obras/{obra}', 'ObrasController@destroy');

Route::get('/pinturas', 'PinturasController@index');

// CRUD Categorias

Route::get('/categorias/create', 'categoriasController@create');
Route::post('/categorias/store', 'categoriasController@store');
Route::get('/categorias', 'categoriasController@index');
Route::get('categorias/{categoria}', 'categoriasController@show');
Route::get('categorias/{categoria}/edit', 'categoriasController@edit');
Route::patch('categorias/{categoria}', 'categoriasController@update');
Route::delete('/categorias/{categoria}', 'categoriasController@destroy');

// CRUD Estilos

Route::get('/estilos/create', 'estilosController@create');
Route::post('/estilos/store', 'estilosController@store');
Route::get('/estilos', 'estilosController@index');
Route::get('estilos/{estilo}', 'estilosController@show');
Route::get('estilos/{estilo}/edit', 'estilosController@edit');
Route::patch('estilos/{estilo}', 'estilosController@update');
Route::delete('/estilos/{estilo}', 'estilosController@destroy');

// CRUD Carrinhos

Route::get('/carrinhos/create', 'carrinhosController@create');
Route::post('/carrinhos/store', 'carrinhosController@store');
Route::get('/carrinhos', 'CarrinhosController@index');
Route::get('carrinhos/{carrinho}', 'CarrinhosController@show');
Route::get('carrinhos/{carrinho}/edit', 'carrinhosController@edit');
Route::patch('carrinhos/{carrinho}', 'carrinhosController@update');
Route::delete('/carrinhos/{carrinho}', 'carrinhosController@destroy');

// CRUD telefones

Route::get('/telefones/create', 'telefonesController@create');
Route::post('/telefones/store', 'telefonesController@store');
Route::get('/telefones', 'TelefonesController@index');
Route::get('telefones/{telefone}', 'telefonesController@show');
Route::get('telefones/{telefone}/edit', 'telefonesController@edit');
Route::patch('telefones/{telefone}', 'telefonesController@update');
Route::delete('/telefones/{telefone}', 'telefonesController@destroy');

// CRUD enderecos

Route::get('/enderecos/create', 'enderecosController@create');
Route::post('/enderecos/store', 'enderecosController@store');
Route::get('/enderecos', 'EnderecosController@index');
Route::get('enderecos/{endereco}', 'enderecosController@show');
Route::get('enderecos/{endereco}/edit', 'enderecosController@edit');
Route::patch('enderecos/{endereco}', 'enderecosController@update');
Route::delete('/enderecos/{endereco}', 'enderecosController@destroy');

// CRUD pedidos

Route::get('/pedidos/create', 'pedidosController@create');
Route::post('/pedidos/store', 'pedidosController@store');
Route::get('/pedidos', 'pedidosController@index');
Route::get('pedidos/{pedido}', 'pedidosController@show');
Route::get('pedidos/{pedido}/edit', 'pedidosController@edit');
Route::patch('pedidos/{pedido}', 'pedidosController@update');
Route::delete('/pedidos/{pedido}', 'pedidosController@destroy');





Route::get('/pinturas', 'PinturasController@index');




 // Route::resource('obras','ObrasController');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

