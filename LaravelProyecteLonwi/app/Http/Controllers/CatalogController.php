<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Champion;

class CatalogController extends Controller
{
    //
    public function index() {
        $champions = Champion::all();
        return view('catalogo.index')->with("arrayChampions", $champions);
    }
    public function create(){
        return view('catalogo.create');
    }

    public function show($id){
        $champion = Champion::find($id);
        return view('catalogo.show', array(
                    'champion'=>$champion,
                    'id'=>$id) );
    }

    /*public function store(Request $request) {
        $movie = new Movie();
        if( $request->has("title") && $request->has("year") &&
            $request->has("director") && $request->has("poster") &&
            $request->has("synopsis")
        ) {
            $movie->title = $request->input("title");
            $movie->year = $request->input("year");
            $movie->director = $request->input("director");
            $movie->poster = $request->input("poster");
            $movie->synopsis = $request->input("synopsis");
            $movie->rented = false;
            $movie->save();
            return "Stored OK.<br>
                    <a href='/'>Seguir</a>";
        } else
            return "Store: Faltan datos.<br>
                    <a href='/'>Seguir</a>";
    }

    public function edit($id) {
        return view( 'catalog.edit', array('id'=>$id) );
    }

     public function update(Request $request, $id) {
        $movie = Movie::find($id);
        if( $request->has("title") && $request->has("year") &&
            $request->has("director") && $request->has("poster") &&
            $request->has("synopsis")
        ) {
            $movie->title = $request->input("title");
            $movie->year = $request->input("year");
            $movie->director = $request->input("director");
            $movie->poster = $request->input("poster");
            $movie->synopsis = $request->input("synopsis");
            $movie->rented = false;
            if( $request->has("rented") )
                $movie->rented = true;
            $movie->save();
            return "Pelicula creada <br>
                    <a href='/'>Seguir</a>";
        } else
            return "Update: Faltan datos <br>
                    <a href='/'>Seguir</a>";
    }

    public function destroy() {
        return "Destroy catalog (TODO)";
    }*/

}
