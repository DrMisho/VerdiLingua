<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OptionTranslation extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['option'];
}
