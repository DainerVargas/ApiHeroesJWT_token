<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperheroeMission extends Model
{
    use HasFactory;

    protected $fillable = ['superheroe_id','mission_id'];
}
