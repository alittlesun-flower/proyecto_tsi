<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //el contenido de este controlador, esté bloqueado a menos de que estés autentificado
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function crear()
    {
        return view('crearServicio');
    }
    /*public function eliminar()
    {
        return view('eliminarServicio');
    }
    public function modificar()
    {
        return view('modificarServicio');
    }*/
    public function ver()
    {
        return view('verServicio');
    }
}
