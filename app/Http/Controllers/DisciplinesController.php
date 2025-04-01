<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Disciplines;

class DisciplinesController extends Controller
{
    public function save (Request $request)
    {
        //dd($request->all());
        try {
            return DB::transaction(function () use ($request)
            {
                $errors = null;
                $item = new Disciplines();
                $item->designation = $request->designation;
                $item->description = $request->description;
                $item->sigle = $request->sigle;
                $item->coefficient = $request->coef;
                $item->save();

                return redirect('/#!/disciplines')->with('status', 'Discipline has been saved with success');
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
                Disciplines::destroy($id);
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
