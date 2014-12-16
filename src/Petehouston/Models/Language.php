<?php namespace Petehouston\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Waavi\Translation\Models\Language as WaaviLanguage;

class Language extends WaaviLanguage {
    
    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
}
