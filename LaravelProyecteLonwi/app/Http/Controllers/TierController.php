<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Tier;
use App\Champion;

class TierController extends Controller
{
    //
    public function index() {
        $tier = Tier::all();
        return view('CTier.index')->with("arrayTier", $tier);
    }
    public function create(){
        return view('CTier.create');
    }

    public function show($id){
        $tier = Tier::find($id);
        $champions = DB::table('champions')->where('tier', $tier->nombre)->get();
        $champions = json_decode($champions, true);
        return view('CTier.show', array(
                    'tiers'=>$tier,
                    'id'=>$id), compact('champions'));
    }

    public function store(Request $request) {
        $tier = new Tier();
        if( $request->has("nombre")) {
            $tier->nombre = $request->input("nombre");
            $tier->save();
            return "Tier creado.<br>
                    <a href='/'>Seguir</a>";
        } else
            return "Faltan datos.<br>
                    <a href='/'>Seguir</a>";
    }

    public function edit($id) {
        return view( 'CTier.edit', array('id'=>$id) );
    }

     public function update(Request $request, $id) {
        $tier = Tier::find($id);
        if( $request->has("nombre")) {
            $tier->nombre = $request->input("nombre");
            $tier->save();
            return "Tier editado <br>
                    <a href='/'>Seguir</a>";
        } else
            return "Faltan datos <br>
                    <a href='/'>Seguir</a>";
    }

    public function destroy() {
        return "Destroy catalog (TODO)";
    }

}
