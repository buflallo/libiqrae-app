<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Liste extends Model
{
    use HasFactory;
    protected $fillable = [
        'img', 
        'ecole_id',
        'niveau_id'
    ];
    
}
