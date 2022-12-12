<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contribuyente;

class ContribuyenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view("pago");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createcontribuyente" );
        
        
    }
    
    /**public function consultado()
    {
        $respuesta=Http::get('https://mindicador.cl/api');
        $dolar= $respuesta->json();
        return view('consultado', compact('dolar'));
    }
    */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
            $contribuyentes = new Contribuyente();
            $contribuyentes->nombre=$request->input("nombre");
            $contribuyentes->apellido_paterno=$request->input("apellido_paterno");
            $contribuyentes->apellido_materno=$request->input("apellido_materno");
            $contribuyentes->clave_catastral=$request->input("clave_catastral");
            $contribuyentes->save();
            return view("showcontribuyente", compact("contribuyentes"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contribuyentes = Contribuyente::find($contribuyentes);
        return view("showcontribuyente", compact("contribuyentes"));
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
        $contribuyentes = Contribuyente::find($id);
        $contribuyentes->save( );
        return redirect("contribuyentes/");
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
