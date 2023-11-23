<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    use HasFactory;

    protected $fillable = ['name','superhero_id'];

    public function superhero() {
        return $this->belongsTo(Superheroe::class);
    }
}
