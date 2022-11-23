<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'club',
        'city',
        'serie',
        'logo',
        'description',
        'points',
        'goal_scored',
        'goal_conceded',
        'goal_difference'
    ];
}
