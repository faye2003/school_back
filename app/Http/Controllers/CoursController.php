<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Cours;

class CoursController extends Controller
{
    public function save (Request $request)
    {
        //dd($request->all());
        try {
        
            return DB::transaction(function () use ($request) 
            {
                $errors = null;
                $item = new Cours();
                $item->designation = $request->designation;
                $item->description = $request->description;
                $item->speciality = $request->speciality;
                $item->has_video = $request->has_video;
                $item->save();

                return redirect('/#!/cours')->with('status', 'Cours has been saved by success');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
