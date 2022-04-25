<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    //protected $primaryKey = 'subject_category_id';


    public function termtest()
    {
        return $this->hasOne(Termtest::class);
    }

    public function subjectcategory()
    {
        return $this->belongsTo(Subjectcategory::class,'subject_category_id');
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    } 
}
