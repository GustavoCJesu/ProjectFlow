<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    public function roles(): BelongsToMany{
        return $this->belongsToMany(Role::class, 'user_roles')->withPivot('assigned_by')->withTimestamps();
    }

    public function project(): HasMany{
        return $this->hasMany(Project::class);
    }

    public function projectMembers():HasMany {
        return $this->hasMany(ProjectMembers::class);
    }

    public function task(): HasMany {
        return $this->hasMany(Task::class);
    }

    public function taskComment(): HasMany {
        return $this->hasMany(TaskComment::class);
    }
}
