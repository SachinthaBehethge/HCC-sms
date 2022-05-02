<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'class_id',
        'day_id',
        'period_id',
        'subject'
    ];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function period()
    {
        return $this->belongsTo(period::class);
    }

   

    public function class(){
        return $this->belongsTo(classes::class);
    }

}
