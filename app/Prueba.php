<?php namespace App;

use Illuminate\Database\Eloquent\Model;

Class Prueba extends Model
{
	public function saludar($nombre)
	{
		return "Hola $nombre";
	}
}