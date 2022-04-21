<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSection extends Model
{
    use HasFactory;

    protected $table='class_section';
    protected $fillable = ['section_id','class_id','class_teacher_id'];

  


    public function teacher()
    {
        return $this->hasOne(Teacher::class,'id','class_teacher_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }

    

}
