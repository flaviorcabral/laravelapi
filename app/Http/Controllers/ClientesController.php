<?php

namespace App\Http\Controllers;

use Cache;
use App\Clientes;
use App\Logs;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getClientes()
    { 
      // ela é unica.
      $chave = "laravel::Clientes";
      // ele é em minutos
      
      $periodo = 30; //minutos

      $clientes = Cache::remember($chave, $periodo, function(){
          return Clientes::limit(1000)->get();
      });


      $logs = Cache::remember("laravel::logs", 60, function(){
          return Logs::limit(1000)->get();
      });


   		return view('clientes.clientes', [
   		'clientes'				=> $clientes,
   		'logs'					=> $logs

   		]);
    }

    public function cadastraCliente(Request $data)
    {
    	Clientes::create([
    	'nome'	   => $data->nome,
    	'cnpj'	   => $data->cnpj,
    	'user_id'  => $data->user_id
    	]);

    	return redirect('/clientes');
    }


}
