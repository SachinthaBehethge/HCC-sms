<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class term extends Model
{
    use HasFactory;

    
    public function termtests()
    {
        return $this->belongsTo(Termtest::class,'term_id');
    }
}
