<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sentence extends Model
{
    protected $fillable = ['imperative', 'detail'];

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
