<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function missions(){
        return $this->belongsToMany(Mission::class);
    }

    public function superheroes(){
        return $this->belongsToMany(Superheroe::class);
    }
}
