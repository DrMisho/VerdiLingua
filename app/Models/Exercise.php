<?php

namespace App\Models;

use App\Models\Translations\ExerciseTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Exercise extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;

    protected $fillable = ['question_id', 'type'];
    public $translationModel = ExerciseTranslation::class;
    public $translatedAttributes = ['word'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function phases()
    {
        return $this->belongsToMany(Phase::class)->withPivot(['expected_time']);
    }

}
