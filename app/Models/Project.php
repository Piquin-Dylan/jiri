<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = [
        'name_project',
        'description',
        'link',
        'tasks',
        'task',
    ];


    public function jiris(): BelongsToMany
    {
        return $this->belongsToMany(Jiri::class);
    }

    public function jiris2(): BelongsToMany
    {
        return $this->belongsToMany(Jiri::class, 'jiri_project', 'project_id', 'jiri_id');
    }

}
