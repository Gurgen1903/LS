<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home_category extends Model
{
    protected $fillable = [
        'category_name_en', 'category_name_ru', 'category_name_am','main','hide',
    ];
}
