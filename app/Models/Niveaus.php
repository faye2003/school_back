<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;

class Niveaus extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function classes ()
    {
        return $this->hasMany(Classes::class);
    }
}
