<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GradeTranslation extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['name'];}
