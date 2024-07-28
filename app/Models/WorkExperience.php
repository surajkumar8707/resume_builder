<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'start_date', 'end_date', 'currently_work',
        'country', 'state', 'city',
    ];

    public function user()
    {
        return $this->belongsTo(Resume::class);
    }
}
