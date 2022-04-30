<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'subject_name',
        'grade_id',
        'subcategory_id'
    ]
    ;
    //protected $primaryKey = 'subject_category_id';


    public function termtests()
    {
        return $this->hasMany(Termtest::class,'subject_id');
    }

    public function subjectcategory()
    {
        return $this->belongsTo(Subjectcategory::class,'subject_category_id');
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    } 
}
