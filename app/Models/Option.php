<?php

namespace App\Models;

use App\Models\Translations\OptionTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Option extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;

    protected $fillable = ['id', 'is_correct', 'exercise_id'];
    public $translationModel = OptionTranslation::class;
    public $translatedAttributes = ['option'];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

}
