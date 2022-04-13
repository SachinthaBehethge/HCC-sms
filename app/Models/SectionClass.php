<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionClass extends Model
{
    use HasFactory;

    protected $table='section_class';
    protected $fillable = ['section_id','class_id','class_teacher_id'];

  


    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function section()
    {
        return $this->belongsToMany(section::class);
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class);
    }

}
