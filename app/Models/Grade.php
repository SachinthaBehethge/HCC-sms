<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
     

    

    public function classes(){
        return $this->hasMany(Classes::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    } 

    public function subjects(){
        return $this->hasMany(Subject::class);
    } 
}
