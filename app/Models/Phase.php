<?php

namespace App\Models;

use App\Models\Translations\PhaseTranslation;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use phpDocumentor\Reflection\Types\This;

class Phase extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    protected $fillable = ['grade_id', 'order'];
    public $translationModel = PhaseTranslation::class;
    public $translatedAttributes = ['name'];

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class)->withPivot(['expected_time']);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
