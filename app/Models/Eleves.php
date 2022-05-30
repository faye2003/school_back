<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inscriptions;
use App\Models\Series;
use App\Models\Cours;
use App\Models\Disciplines;
use App\Models\Classes;

class Eleves extends Model
{
    use HasFactory;

    //protected $guarded = [];
    protected $table = 'eleves';
    protected $fillable = ['id', 'nom', 'prenom', 'telephone', 'classe', 'age', 'sexe', 'moyenne'];

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
