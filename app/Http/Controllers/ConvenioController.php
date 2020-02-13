<?php

namespace weborii\Http\Controllers;

use Illuminate\Http\Request;
use weborii\Models\Noticia;
use Illuminate\Support\Facades\DB;
use weborii\Models\Convenio;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::latest('idNoticia')->take(3)->get();
        return view('convenio.mapa',compact('noticias'));
    }

    
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $paises=DB::table('pais')->get();
        return view('convenio.create',["paises"=>$paises]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $convenio = new Convenio();
        $convenio->codigoConvenio=$request->codigoConvenio;
        $convenio->tituloConvenio=$request->tituloConvenio;
        $convenio->objetoConvenio=$request->objetoConvenio;
        $convenio->vigenciaConvenio=$request->vigenciaConvenio;
        $convenio->fechaExpedicion=$request->fechaExpedicion;
        $convenio->fechaTerminacion=$request->fechaTerminacion;
        $convenio->idPais=$request->idPais;
        $convenio->save();

        return back()->with('mensaje','Convenio agregado');

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
