<?php

namespace App\Models;

use App\Models\Translations\GradeTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Grade extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;

    protected $fillable = ['order'];
    public $translationModel = GradeTranslation::class;
    public $translatedAttributes = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function phases()
    {
        return $this->hasMany(Phase::class);
    }
}
