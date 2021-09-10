<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

//Acionando a view Welcome digitar /home
//Route::get('/home', function () {
  //  return view('welcome');
//});
//Acionando a view Welcome digitar /home/sistemas Exemplo
//Route:: get('/home/sistema', function(){
 //   return view("welcome");
//});

//Acionando a view Jogos digitar /jogos
//Route::get('/jogos', function(){
        //return view("jogos");
//});


//Route::view('/jogos','jogos');

//A rota pode retornar um texto

//Route::get('/jogos', function(){
  //  return "<h1>Página de Jogos</h1>";

//});


//passando parametro estatico para view 
//Route::view('/jogos','jogos',['nomeJogo'=>'Fifa21']);

//passando 2 ou mais parametros estáticos
Route::view ('/jogos','jogos', ['nomeJogo'=>'Fifa 21', 'precoJogo'=>230, 'fornecedorJogo'=>'EASport']);