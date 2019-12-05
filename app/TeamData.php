<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TeamData extends Pivot
{
    protected $table = 'team_data';
}
