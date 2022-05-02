<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $follable = [
        'id',
        'student_id',
        'class_id',
        'achievement',
        'is_approved',
        'approved_by'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class,);
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class);
    }

}
