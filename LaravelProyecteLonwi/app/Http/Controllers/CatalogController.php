<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Champion;
use App\Tier;

class CatalogController extends Controller
{
    //
    public function index() {
        $champions = Champion::all();
        return view('catalogo.index')->with("arrayChampions", $champions);
    }
    public function create(){
        $tiers = Tier::all();
        return view('catalogo.create', compact('tiers'));
    }
    public function show($id){
        $champion = Champion::find($id);
        return view('catalogo.show', array(
                    'champions'=>$champion,
                    'id'=>$id) );
    }

    public function store(Request $request) {
        $champion = new Champion();
        if( $request->has("nombre") && $request->has("rol") &&
            $request->has("tier") && $request->has("poster")
        ) {
            $champion->nombre = $request->input("nombre");
            $champion->rol = $request->input("rol");
            $champion->tier = $request->input("tier");
            $champion->poster = $request->input("poster");
            $champion->save();
            return "Campeon creado.<br>
                    <a href='/'>Seguir</a>";
        } else
            return "Faltan datos.<br>
                    <a href='/'>Seguir</a>";
    }

    public function edit($id) {
        $tiers = Tier::all();
        return view( 'catalogo.edit', array('id'=>$id), compact('tiers') );
    }

     public function update(Request $request, $id) {
        $champion = champion::find($id);
        if( $request->has("nombre") && $request->has("rol") &&
            $request->has("tier") && $request->has("poster")
        ) {
            $champion->nombre = $request->input("nombre");
            $champion->rol = $request->input("rol");
            $champion->tier = $request->input("tier");
            $champion->poster = $request->input("poster");
            $champion->save();
            return "Campeon editado <br>
                    <a href='/'>Seguir</a>";
        } else
            return "Faltan datos <br>
                    <a href='/'>Seguir</a>";
    }

    public function destroy() {
        return "Destroy catalog (TODO)";
    }

}
