<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Enseignants;

class EnseignantsController extends Controller
{
    public function save(Request $request)
    {
        try {
            return DB::transaction(function () use ($request)
            {
                $errors = null;
                $item = new Enseignants();
                $item->nom = $request->nom;
                $item->prenom = $request->prenom;
                $item->email = $request->email;
                $item->telephone = $request->telephone;
                $item->sexe = $request->sexe;
                $item->adresse = $request->adresse;
                $item->discipline = $request->discipline;
                $item->save();

                return redirect('/#!/profs')->with('status', 'Professeurs enregistreeee avec success!');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function delete($id)
    {
        try {
            return DB::transaction(function () use ($id)
            {
                Enseignants::destroy($id);
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
