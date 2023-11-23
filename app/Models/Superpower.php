<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superpower extends Model
{
    use HasFactory;

    protected $fillable = ['description','code'];

    public function heroes()
    {
        return $this->belongsToMany(Superpower::class, 'superhero_superpowers', 'superhero_id', 'superpower_id')
            ->withPivot('level');
    }
}
