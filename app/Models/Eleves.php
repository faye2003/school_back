<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleves extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function inscriptions ()
    {
        return $this->belongsTo(Inscriptions::class);
    }

    public function series ()
    {
        return $this->belongsTo(Series::class);
    }

    public function cours ()
    {
        return $this->hasMany(Cours::class);
    }

    public function disciplines ()
    {
        return $this->hasMany(Disciplines::class);
    }

    public function classes ()
    {
        return $this->belongsTo(Classes::class);
    }
}
