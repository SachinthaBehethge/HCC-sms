<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
     

    public function student()
    {
        return $this->hasOne(Student::class,'section_id');
    }

    // public function classes(){
    //     return $this->belongsToMany(Classes::class, 'class_section', 'section_id', 'class_id');
    // }

    public function ClassSections(){
        return $this->hasMany(ClassSection::class,'section_id');
    }

}
