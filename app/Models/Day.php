<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [
        'day'
    ];

    public function periods()
    {
        return $this->hasMany(Period::class);
    }

    public function timetable()
    {
        return $this->hasMany(Timetable::class);
    }

}
