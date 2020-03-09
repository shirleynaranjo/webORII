<?php

namespace weborii\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use weborii\Models\Evento;
use weborii\Models\Noticia;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::orderBy('idEvento','desc')->get();
        $noticias = Noticia::latest('idNoticia')->take(3)->get();
        return view('evento.index', compact('eventos','noticias'));
    }

    public function index1(){

    }

    public function detalle($idEvento)
    {
        $evento = Evento::findOrFail($idEvento);
        $noticias = Noticia::latest('idNoticia')->take(3)->get();
        return view('evento.completa',compact('evento','noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Evento::create($request->all());
        return back()->with('mensaje','Evento creado exitosamente');
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
