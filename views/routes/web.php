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

Route::get('/', function () {
    return view('pagina');
});

Route::get('/primeiraview', function(){
    return view('minhaview');
});
//Aula 31
Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome){
    /*
    return view('minhaview')
            ->with('nome', $nome)
            ->with('sobrenome', $sobrenome);
    */
    /*
    $parametros = ['nome'=>$nome, 'sobrenome'=>$sobrenome];
    return view('minhaview', $parametros);
    */
    return view('minhaview', compact('nome', 'sobrenome'));
});
//Aula 32
Route::get('/email/{email}', function($email){
  if(View::exists('email'))
    return view('email', compact('email'));
  else
    return view('erro');
});

Route::get('/produtos','ProdutoController@listar');
