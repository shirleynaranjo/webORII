<?php

namespace weborii\Http\Controllers;


use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice;
use weborii\Http\Controllers\Controller;
use weborii\Models\Noticia;


class NoticiaController extends Controller
{

    public function getNoticias(){
        $noticias = Noticia::all();
        return response()->json($noticias);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $noticias = Noticia::orderBy('idNoticia','desc')->get();
    return view('noticia.index',compact('noticias'));
    }

    public function detalle($idNoticia)
    {
        $noticia = Noticia::findOrFail($idNoticia);
        $noticias = Noticia::latest('idNoticia')->take(3)->get();
        return view('noticia.completa',compact('noticia','noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
