<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disciplines;
use App\Models\TypeEvaluations;

class Evaluations extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function disciplines ()
    {
        return $this->belongsTo(Dispciplines::class);
    }

    public function type_evaluations ()
    {
        return $this->hasMany(TypeEvaluations::class);
    }
}
