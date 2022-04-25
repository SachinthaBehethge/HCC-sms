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

    public function student(){
        return $this->hasMany(Student::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public function notices(){
        return $this->hasMany(Notice::class);
    }
}
