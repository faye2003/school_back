<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function eleves ()
    {
        return $this->hasMany(Eleves::class);
    }

    public function professeurs ()
    {
        return $this->
    }
}
