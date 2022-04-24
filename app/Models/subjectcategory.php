<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjectcategory extends Model
{
    use HasFactory;

    public function subjects()
    {
        return $this->belongsTo(subject::class);
    }
}