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
        'achievement',
        'is_approved'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
