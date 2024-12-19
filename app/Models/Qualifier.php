<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualifier extends Model
{
    protected $fillable = ['phrase', 'sentiment_level'];
}
