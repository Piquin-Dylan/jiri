<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jiri extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name_project',
        'description',
        'date_jiri',
        'hours_start',
        'hours_end',
    ];


    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class,'jiri_contact');
    }

}
