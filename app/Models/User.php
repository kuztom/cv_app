<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'street',
        'house_number',
        'city',
        'country',
        'zip_code',
    ];

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function workExperience()
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
}
