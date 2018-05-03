<?php

namespace DarkStorm;

use Illuminate\Database\Eloquent\Model;

class clans extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'tag','description', 'rank_points','leader_id',
    ];
}
