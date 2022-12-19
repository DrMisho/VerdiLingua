<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    protected $fillable = ['exercise_phase_id', 'user_id', 'is_passed', 'time_taken'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exercise()
    {
        return $this->hasOneThrough(Exercise::class, 'exercise_phase', 'xx', 'yy', 'zz');
    }
}
