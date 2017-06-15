<?php

namespace App\Http\Controllers;

use App\Alumnos;
use App\Representantes;
use App\Notas;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Alumnos $alumnos)
    {
        return View('alumnos.index')->with('alumnos', $alumnos->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Alumnos $alumnos, Representantes $representantes)
    {
    
        $alumnos->nombre = $request->nombre;
        $alumnos->apellido = $request->apellido;
        $alumnos->cedula = $request->cedula;
        $alumnos->fecha_nac = $request->fache_nac;
        $alumnos->direcion = $request->direccion;
        $alumnos->telefono = $request->telefono;
        $alumnos->email = $request->email;
        $alumnos->banco = $request->banco;
        $alumnos->nro_cuenta = $request->nro_cuenta;
        $alumnos->save();

        $representantes->nombre = $request->representante['nombre'];
        $representantes->apellido =  $request->representante['apellido'];
        $representantes->cedula =  $request->representante['cedula'];
        $representantes->fecha_nac =  $request->representante['fecha_nac'];
        $representantes->direccion =  $request->representante['direccion'];
        $representantes->telefono =  $request->representante['telefono'];
        $representantes->alumnos_id = $alumnos->id;
        $representantes->save();

        //flash()->info("El registro fue procesado satisfactoriamente :D");

        return redirect()->route('alumnos.index')->with('mensaje', 'El registro fue procesado satisfactoriamente :D');
       // dd($request->all()['representante']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show($id, Alumnos $alumnos)
    {
         return View('alumnos.show')->with('alumno', $alumnos->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumnos $alumnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumnos $alumnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumnos $alumnos)
    {
        //
    }


    public function cagarNota($id, Alumnos $alumnos)
    {
       return View('alumnos.cargar-nota')->with('alumno', $alumnos->find($id));
    }

    public function storeNota(Request $request, Notas $notas)
    {
        //dd($request->nota);
        $notas->nota = (int) $request->nota;
        $notas->lapso = $request->lapso;
        $notas->alumnos_id = $request->alumno_id;
        $notas->save();
         return redirect()->route('alumnos.index')->with('mensaje', 'Se cargo la nota satisfactoriamente :D');
    }
}
