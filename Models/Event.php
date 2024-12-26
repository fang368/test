<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'duration',
        'id_age_restriction',
        'description',
        'team',
        'image',
        'show_date',
    ];

    protected $casts = [
        'show_date' => 'datetime:Y-m-d H:i:s', 
    ];

    public function ageRestriction()
    {
        return $this->belongsTo(AgeRestriction::class, 'id_age_restriction');
    }
}
