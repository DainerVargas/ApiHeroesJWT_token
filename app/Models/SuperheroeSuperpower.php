<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperheroeSuperpower extends Model
{
    use HasFactory;

    protected $fillable = ['superhero_id','superpower_id','level'];
}
