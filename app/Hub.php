<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hub extends Model
{
    protected $fillable = ['hub_address', 'hub_area', 'map_link', 'off_day', 'start_time', 'end_time', 'user_id', 'status'];
}
