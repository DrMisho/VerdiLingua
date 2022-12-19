<?php

namespace App\Models;

use App\Models\Translations\QuestionTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Question extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;
    protected $fillable = ['id'];
    public $translationModel = QuestionTranslation::class;
    public $translatedAttributes = ['question'];

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
}
