<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'section_id',
        'class_name',
        'teacher_id'
    ];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function marks(){
        return $this->hasMany(Marks::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public function notices(){
        return $this->hasMany(Notice::class);
    }

    public function timetables()
    {
        return $this->hasMany(Timetable::class);
    }

    public function achievements(){
        return $this->hasMany(Achievement::class);
    }
}
