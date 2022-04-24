<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    //protected $primaryKey = 'subject_category_id';


    public function termtests()
    {
        return $this->hasOne(termtest::class);
    }

    public function subjectcategory()
    {
        return $this->belongsTo(subjectcategory::class,'subject_category_id');
    }

    public function grade(){
        return $this->belongsTo(grade::class);
    } 
}
