<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    protected $fillable = ['status','priority','deathline','notifiable','sentence_id','team_id','project_id'];
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
    public function teams(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
    public function sentences(): BelongsTo
    {
        return $this->belongsTo(Sentence::class);
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
