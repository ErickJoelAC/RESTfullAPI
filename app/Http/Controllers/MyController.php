<?php namespace App\Http\Controllers;

use App\Prueba;

Class MyController extends Controller
{
	public function index()
	{
		$modelo = new Prueba();

		$saludo = $modelo->saludar("Erick");
		return view('prueba.index', ['saludo' => $saludo]);
	}
}