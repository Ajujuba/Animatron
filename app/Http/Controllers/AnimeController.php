<?php

namespace App\Http\Controllers;

use App\Anime;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes=Anime::all(['id','nome','qtd_temp', 'criadores_id']);
        return view('lista', ['animes'=>$animes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criador=\App\Criadores::all(['id','nome']);
      
        return view('cadastro', ['criador'=>$criador]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animes = new Anime();
        $animes->nome=$request->nome_anime;
        $animes->qtd_temp=$request->qtd_temp;
        $animes->data=$request->data;
        $animes->sinopse=$request->sinopse;
        $animes->criadores_id=$request->autor;
        $animes->save();

        return redirect()->route('animes.lista');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $criador=\App\Criadores::all(['id','nome']);
        $anime=Anime::find($id);
        return view('cadastro', ['anime'=>$anime], ['criador'=>$criador]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anime $anime)
    {
        $anime=Anime::find($request->id);
        $anime->nome=$request->nome_anime;
        $anime->qtd_temp=$request->qtd_temp;
        $anime->data=$request->data;
        $anime->sinopse=$request->sinopse;
        $anime->criadores_id=$request->autor;
        $anime->save();
        return redirect()->route('animes.lista');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $anime=Anime::find($id);
       $anime->delete();
       return redirect()->route('animes.lista');
    }
}
