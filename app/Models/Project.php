<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function project_history(): HasMany{
        return $this->hasMany(ProjectHistory::class);
    }

    public function projectMembers(): HasMany{
        return $this->hasMany(ProjectMembers::class);
    }

    public function task(): HasMany{
        return $this->hasMany(Task::class);
    }
}
