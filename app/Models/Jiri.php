<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

class Jiri extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name_project',
        'description',
        'date_jiri',
        'hours_start',
        'hours_end',
        'users_id',
        'user_id',
    ];

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class)->withPivot('role', 'token');
    }

    public function evaluators(): BelongsToMany
    {
        return $this->contacts()->wherePivot('role', 'Evaluator');
    }

    public function evaluated(): BelongsToMany
    {
        return $this->contacts()->wherePivot('role', 'Evaluated');
    }

    /*
     * TODO
     * une relation pour les étudiants du jiri
     * une relation pour les évaluateurs du jiri
     * */

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    #[Scope]
    protected function currentJiri(Builder $query): void
    {
        $query->whereDate('date_jiri', Carbon::now());
    }

    #[Scope]
    protected function comingJiri(Builder $query): void
    {
        $query->whereDate('date_jiri', '>', Carbon::now());
    }

    #[Scope]
    protected function archivedJiri(Builder $query): void
    {
        $query->whereDate('date_jiri', '<', Carbon::now());
    }
}
