<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jiri extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_project',
        'description',
        'date_jiri',
        'date_jiri',
        'hours_start',
        'hours_end',
    ];
}
