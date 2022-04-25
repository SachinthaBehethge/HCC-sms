<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'body',
        'class_id'
        
        
        
    ];

    public function class(){
        return $this->belongsTo(Classes::class);
    }

}
