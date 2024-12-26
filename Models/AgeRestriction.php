<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgeRestriction extends Model
{
    use HasFactory;

    protected $table = 'age_restrictions'; 

    protected $fillable = [
        'tvalue',
    ];

    public $timestamps = false; 
}
