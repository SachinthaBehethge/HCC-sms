<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'id',
        'index_no',
        'student_no',
        'classes_id',
        'email',
        'fullname',
        'name_with_ini',
        'address',
        'dob',
        'nationality',
        'nic',
        'special_needs',
        'height',
        'weight',
        'gardian_name',
        'gardian_phone',
        'gardian_email',
        'way_of_coming',
        'distance'

        
    ];





    public function user()
    {
        return $this->hasOne(User::class,'id');
    }

    public function class()
    {
        return $this->belongsTo(Classes::class,'classes_id');
    }
   
    public function marks()
    {
        return $this->hasMany(Mark::class,'student_id');
    }
    
}
