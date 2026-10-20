<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function project(): BelongsTo{
        return $this->belongsTo(Project::class);
    }

    public function projectMembers(): HasOne{
        return $this->hasOne(ProjectMembers::class);
    }

    public function taskHistory(): HasMany {
        return $this->hasMany(TaskHistory::class);
    }
}
