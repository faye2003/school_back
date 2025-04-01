<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Professeurs;
use App\Models\Evaluations;
use App\Models\EleveDisciplines;

class Disciplines extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function evaluations()
    {
        return $this->hasMany(Evaluations::class);
    }

    public function professeurs()
    {
        return $this->hasMany(Professeurs::class);
    }

    public function eleves_disciplines()
    {
        return $this->belongsTo(EleveDisciplinesL::class);
    }
}
