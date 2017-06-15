<?php

namespace App\Http\Controllers;

use App\Alumnos;
use App\Representantes;
use App\Notas;
use App\Ayudantias;
use Illuminate\Http\Request;

class BecasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Alumnos $alumnos)
    {
        $data = Alumnos::join('ayudantias','alumnos.id','=','ayudantias.alumnos_id')->orderBy('porcentage','desc')->get();
        return View('becas.index')->with('alumnos', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAyudantia($id)
    {
        dd($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cerateAyudantia(Alumnos $alumnos)
    {
        return View('becas.cerate-ayudantia')->with('alumnos', $alumnos->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAyudantia(Request $request, Ayudantias $ayudantias)
    {
           $ayudantias->alumnos_id =  $request->alumno_id;
           if ( $request->grupo_familiar == 1) {
               $ayudantias->grupo_familiar = "1-2 Personas";
           }
           if($request->grupo_familiar == 2){
              $ayudantias->grupo_familiar = "3-5 Personas";
           }
           if($request->grupo_familiar == 3){
              $ayudantias->grupo_familiar = "6-8 Personas";
           }
           if($request->grupo_familiar == 4){
              $ayudantias->grupo_familiar = "9-mas Personas";
           }
           if ( $request->ingreso_familiar == 1) {
               $ayudantias->ingreso_familiar = "Sueldo Memsual";
           }
           if($request->ingreso_familiar == 2){
              $ayudantias->ingreso_familiar = "Sueldo Semanal";
           }
           if($request->ingreso_familiar == 3){
              $ayudantias->ingreso_familiar = "Honorarios Profesionales";
           }
           if($request->ingreso_familiar == 4){
              $ayudantias->ingreso_familiar = "Fortuna-Herencia";
           }
           if ( $request->vivienda_familiar == 1) {
               $ayudantias->vivienda_familiar = "Propia";
           }
           if($request->vivienda_familiar == 2){
              $ayudantias->vivienda_familiar = "Familiar";
           }
           if($request->vivienda_familiar == 3){
              $ayudantias->vivienda_familiar = "Arquilada";
           }       
        
        $ayudantias->porcentage = (int) $request->vivienda_familiar + $request->ingreso_familiar + $request->grupo_familiar;
        $ayudantias->save();
        return redirect('becas/ayudantia')->with('mensaje', 'El registro fue procesado satisfactoriamente :D');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
