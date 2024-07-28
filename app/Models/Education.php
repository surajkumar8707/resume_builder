<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_name', 'degree', 'field_of_study', 'start_date', 'end_date',
        'currently_study', 'country', 'state', 'city',
    ];

    public function user()
    {
        return $this->belongsTo(Resume::class);
    }
}
