<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Disciplines;

class DisciplinesController extends Controller
{
    public function save (Request $request)
    {
        try {
            return DB::transaction(function () use ($request)
            {
                $errors = null;
                $item = new Disciplines();

            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
