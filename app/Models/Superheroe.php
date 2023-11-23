<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    use HasFactory;

    protected $fillable = ['name','year','planetOrigin','password','email'] ;

    public function powers()
    {
        return $this->belongsToMany(Superpower::class, 'superhero_superpowers', 'superhero_id', 'superpower_id')
            ->withPivot('level');
    }

    public function companion()
    {
        return $this->hasMany(Companion::class);
    }

    public function missions()
    {
        return $this->belongsToMany(Mission::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
