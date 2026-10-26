<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
