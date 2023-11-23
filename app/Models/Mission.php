<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = ['code','description','type'];

    public function superheroes() {
        return $this->belongsToMany(Superheroe::class);
    }
}
