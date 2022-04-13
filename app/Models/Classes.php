<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'class_name'
    ];

    public function section(){
        return $this->belongsToMany(section::class, 'section_class', 'section_id', 'class_id');
    }
}
