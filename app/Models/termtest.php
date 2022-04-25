<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termtest extends Model
{
    use HasFactory;
    protected $fillable = [
        'term_id',
        'subject_id',
        'test_date',
        'start_time',
        'end_time'
    ];

    public function term()
    {
        return $this->belongsTo(Term::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
