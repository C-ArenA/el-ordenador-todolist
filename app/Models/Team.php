<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
    function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    
    protected $fillable = ['name'];
}
