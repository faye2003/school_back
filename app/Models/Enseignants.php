<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disciplines;
use App\Models\Emplois;
use App\Models\Cours;

class Enseignants extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function discipline ()
    {
        return $this->belongsTo(Disciplines::class);
    }

    public function emploi ()
    {
        return $this->belongsTo(Emplois::class);
    }

    public function cours ()
    {
        return $this->hasMany(Cours::class);
    }
}
