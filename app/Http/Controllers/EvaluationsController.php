<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Evaluations;

class EvaluationsController extends Controller
{
    public function save(Request $request)
    {
        //dd($request->all());
        try {
            return DB::transaction(function () use ($request) 
            {
                //dd($request->all());
                $errors = null;
                $item = new Evaluations();
                $item->designation = $request->designation;
                $item->description = $request->description;
                $item->surveillant = $request->surveillant;
                $item->duree = $request->duree;
                $item->salle = $request->salle;
                $item->save();

                return redirect('/#!/evaluations')->with('status', 'Evaluations saved with successfully');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
