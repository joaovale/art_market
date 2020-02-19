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


// CRUD Obras

Route::get('/obras/create', 'ObrasController@create');
Route::post('/obras/store', 'ObrasController@store');
Route::get('/obras', 'ObrasController@index');
Route::get('obras/{obra}', 'ObrasController@show');
Route::get('obras/{obra}/edit', 'ObrasController@edit');
Route::patch('obras/{obra}', 'ObrasController@update');
Route::delete('/obras/{obra}', 'ObrasController@destroy');
Route::get('obras/{obra}/select', 'ObrasController@select_categoria');

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

Route::get('/pedidos/create', 'pedidosController@create')->name('pedidos.create');
Route::get('/pedidos/store', 'pedidosController@store')->name('pedidos.store');
Route::get('/pedidos', 'pedidosController@index');
Route::get('pedidos/{pedido}', 'pedidosController@show');
Route::get('pedidos/{pedido}/edit', 'pedidosController@edit');
Route::patch('pedidos/{pedido}', 'pedidosController@update');
Route::delete('/pedidos/{pedido}', 'pedidosController@destroy');


// Rotas do carrinhos

Route::post('/carrinhos/store', 'CarrinhosController@carregar');
Route::get('/carrinhos', 'carrinhosController@index');
Route::get('carrinhos/pedido', 'CarrinhosController@criarPedido');
Route::get('carrinhos/{carrinho}', 'carrinhosController@enviar_carrinho');
Route::get('carrinhos/{carrinho}/retirar', 'carrinhosController@retirar_carrinho');


// // CRUD itemPedido

// Route::get('/itemPedidos/create', 'itemPedidosController@create');
// Route::post('/itemPedidos/store', 'itemPedidosController@store');
// Route::get('/itemPedidos', 'ItemPedidosController@index');
// Route::get('itemPedidos/{itemPedido}', 'itemPedidosController@show');
// Route::get('itemPedidos/{itemPedido}/edit', 'itemPedidosController@edit');
// Route::patch('itemPedidos/{itemPedido}', 'itemPedidosController@update');
// Route::delete('/itemPedidos/{itemPedido}', 'itemPedidosController@destroy');

// CRUD pagamentos

Route::get('/pagamentos/create', 'pagamentosController@create');
Route::post('/pagamentos/store', 'pagamentosController@store');
Route::get('/pagamentos', 'pagamentosController@index');
Route::get('pagamentos/{pagamento}', 'pagamentosController@show');
Route::get('pagamentos/{pagamento}/edit', 'pagamentosController@edit');
Route::patch('pagamentos/{pagamento}', 'pagamentosController@update');
Route::delete('/pagamentos/{pagamento}', 'pagamentosController@destroy');


// CRUD itemDoPedidos

Route::get('/itemDoPedidos/create', 'itemDoPedidosController@create')->name('itemDoPedido.create');
Route::post('/itemDoPedidos/store', 'itemDoPedidosController@store');
Route::get('/itemDoPedidos', 'itemDoPedidosController@index');
Route::get('itemDoPedidos/{itemDoPedido}', 'itemDoPedidosController@show');
Route::get('itemDoPedidos/{itemDoPedido}/edit', 'itemDoPedidosController@edit');
Route::patch('itemDoPedidos/{itemDoPedido}', 'itemDoPedidosController@update');
Route::delete('/itemDoPedidos/{itemDoPedido}', 'itemDoPedidosController@destroy');


Route::get('/pinturas', 'PinturasController@index');

 // Route::resource('obras','ObrasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

