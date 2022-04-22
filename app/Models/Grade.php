<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
     

    public function student()
    {
        return $this->hasOne(Student::class,'section_id');
    }

    public function classes(){
        return $this->hasMany(Classes::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    } 
}
