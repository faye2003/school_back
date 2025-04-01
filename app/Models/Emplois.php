<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enseignants;
use App\Models\Classes;

class Emplois extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function enseignants()
    {
        return $this->belongsTo(Enseignants::class);
    }

    public function classes ()
    {
        return $this->belongsTo(Classes::class);
    }
}
