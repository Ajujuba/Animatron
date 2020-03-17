<?php

namespace App\Http\Controllers;

use App\Criadores;
use Illuminate\Http\Request;

class CriadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criadores=Criadores::all(['id','nome']);
        return view('criador', ['criadores'=>$criadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro_autor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $criadores = new Criadores();
        $criadores->nome=$request->nome_autor;
        $criadores->save();
        return redirect()->route('autor.lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Criadores  $criadores
     * @return \Illuminate\Http\Response
     */
    public function show(Criadores $criadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Criadores  $criadores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $criador=Criadores::find($id);
        
        return view('cadastro_autor', ['criador'=>$criador]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Criadores  $criadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Criadores $criadores)
    {
        $criadores=Criadores::find($request->id);
        $criadores->nome=$request->nome_autor;
        $criadores->save();
        return redirect()->route('autor.lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Criadores  $criadores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $criador=Criadores::find($id);
        $criador->delete();
    }
}
