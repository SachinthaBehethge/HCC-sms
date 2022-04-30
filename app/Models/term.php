<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'term_name',
        'start',
        'end'
    ];
    
    public function termtests()
    {
        return $this->hasMany(Termtest::class,'term_id');
    }
}
