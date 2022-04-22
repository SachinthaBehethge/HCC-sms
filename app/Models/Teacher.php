<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'teacher_no',
        'email',
        'phone',
        'gender',
        'is_classteacher'
        
        
    ];

    public function user()
    {
        return $this->hasOne(User::class,'id');
    }

    public function class()
    {
        return $this->hasOne(Classes::class);
    }

}
