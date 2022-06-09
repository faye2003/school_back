<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Niveaus;

class NiveausController extends Controller
{
    public function save(Request $request)
    {
        try {
            return DB::transaction(function () use ($request)
            {
                //dd($request->all());
                $errors = null;
                $item = new Niveaus();
                $item->designation = $request->designation;
                $item->description = $request->description;
                $item->save();

                return redirect('/#!/niveaus')->with('status', 'Cycle saved successfully');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
