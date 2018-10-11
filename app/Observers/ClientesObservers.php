<?php

namespace App\Observers;

use Cache;

class ClientesObservers {
	
	protected $chave;

	public function __construct()
	{
		$this->chave = "laravel::Clientes";
	}

	public function created()
	{
		Cache::forget($this->chave);
	}

	public function deleted()
	{
		Cache::forget($this->chave);
	}

	public function updated()
	{
		Cache::forget($this->chave);		
	}

}