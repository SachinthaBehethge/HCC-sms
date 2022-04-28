<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'termtest_id',
        'student_id',
        'mark'
    ];

    public function termtest()
    {
        return $this->belongsTo(Termtest::class);
    }

    public function mark()
    {
        return $this->hasOne(Termtest::class);
    }

}
