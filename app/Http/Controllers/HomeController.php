<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Redirecciona al listado de empleados EmpleadoController@index
     * @return HTTP Redirect
     */
    public function index()
    {
        return redirect()->to('empleado');
    }
}
