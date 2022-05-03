<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [
        'period',
        'start',
        'end'
    ];

    public function days()
    {
        return $this->belongsTo(Day::class);
    }

    public function timetables()
    {
        return $this->hasMany(Timetable::class,'period_id');
    }
}
