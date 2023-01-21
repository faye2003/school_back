<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Eleves;
use App\Models\Classes;

class ElevesController extends Controller
{

    public function save(Request $request)
    {
        //dd($request->all);
        try {
            return DB::transaction(function () use ($request)
            {
                $errors = null;
                $item = new Eleves;
                $item->nom = $request['nom'];
                $item->prenom = $request['prenom'];
                $item->telephone = $request['telephone'];
                $item->classe = $request['classe'];
                $item->age = $request['age'];
                $item->sexe = $request['sexe'];
                $item->moyenne = $request['moyenne'];
                $item->save();
                
                return redirect('/#!/eleves')->with('status', 'Les informations de l\'eleve sont bien enregistreeeeeee');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function delete ($id) 
    {
        try {
            return DB::transaction(function () use ($id)
            {
                Eleves::destroy($id);
                return redirect('/#!/eleves')->with('status', 'Les informations de l\'eleve sont bien enregistreeeeeee');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
