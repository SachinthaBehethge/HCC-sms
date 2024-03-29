<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'term_test_id',
        'student_id',
        'class_id',
        'mark'
    ];

    public function termtest()
    {
        return $this->belongsTo(Termtest::class,'term_test_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

   

    public function class(){
        return $this->belongsTo(classes::class);
    }


    

}
