<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fils extends Model
{
    use HasFactory;
    protected $fillable = [
        'pere_id', 
        'niveau_id', 
        'genre', 
        'couleur_pref', 
    ];    
    public $incrementing = false;
}
