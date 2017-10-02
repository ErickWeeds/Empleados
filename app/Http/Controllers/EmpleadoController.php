<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Domicilio;

class EmpleadoController extends Controller {

    /**
     * Display a listing of empleados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $empleados = Empleado::all();
        return view('index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('create');
    }

    /**
     * Store a newly created empleado in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $errors = array();
        //Aplicando validaciones
        $request->validate([
            'txtNombre' => 'required',
            'txtFnacimiento' => 'required|date_format:d/m/Y',
            'txtEmail' => 'required|email',
            'txtDcalle' => 'required',
            'txtDnumero' => 'required|numeric',
            'txtDinterior' => 'nullable',
            'txtDcolonia' => 'required',
            'txtDcp' => 'required|numeric|digits:5',
            'txtDestado' => 'required'
        ]);
        //Generando objeto de nuevo empleado
        $emp = new Empleado();
        $emp->nombre = $request->get('txtNombre');
        $emp->f_nacimiento = $request->get('txtFnacimiento');
        $emp->email = $request->get('txtEmail');
        $emp->nombre = $request->get('txtNombre');
        //Si el empleado se inserta correctamente se insertarán los domicilios
        if ($emp->save()) {
            $dom = new Domicilio();
            $dom->d_calle = $request->get('txtDcalle');
            $dom->d_numero = $request->get('txtDnumero');
            if ($request->get('txtDinterior') != "")
                $dom->d_interior = $request->get('txtDinterior');
            $dom->d_colonia = $request->get('txtDcolonia');
            $dom->d_cp = $request->get('txtDcp');
            $dom->d_estado = $request->get('txtDestado');
            $dom->empleado_id = $emp->id;
            if (!$dom->save()) {
                $errors[] = "No se ha podido guardar el domicilio";
            }
            $domiciliosCount = 1;
            if ($request->has('domiciliosCount')) {
                $domiciliosCount = $request->get('domiciliosCount');
            }
            for ($i = 1; $i <= $domiciliosCount; $i++) {
                $dom = new Domicilio();
                $dom->d_calle = $request->get('txtDcalle_'.$i);
                $dom->d_numero = $request->get('txtDnumero_'.$i);
                if ($request->get('txtDinterior') != "")
                    $dom->d_interior = $request->get('txtDinterior_'.$i);
                $dom->d_colonia = $request->get('txtDcolonia_'.$i);
                $dom->d_cp = $request->get('txtDcp_'.$i);
                $dom->d_estado = $request->get('txtDestado_'.$i);
                $dom->empleado_id = $emp->id;
                $dom->save();
            }
        }
        if(count($errors) == 0){
            $request->session()->flash('success','Se ha registrado correctamente el empleado');
            return view('index');
        }else{
            $request->session()->flash('errors','');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
