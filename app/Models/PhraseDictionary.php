<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhraseDictionary extends Model
{
    protected $table = 'phrases_dictionary';

    protected $fillable = ['level'];
}