<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'position',
        'start_date',
        'end_date',
        'additional_information',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
