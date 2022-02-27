<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    public function permissions()
    {
        return $this->belongsToMany(Permision::class, 'role_permision');

    }

    public function user()
    {
        return $this->belongsToMany(Permision::class, 'role_user');

    }
}
