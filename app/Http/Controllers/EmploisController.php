<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Emplois;

class EmploisController extends Controller
{
    public function save (Request $request)
    {
        try {
            return DB::transaction(function () use ($request)
            {
                $errors = null;
                $item = new Emplois();
                $item->titre = $request->titre;
                $item->description = $request->designation;
                $item->save();

                return redirect('/#!/emplois')->with('status', 'Emploi has been saved with success');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
