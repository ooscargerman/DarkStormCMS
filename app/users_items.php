<?php

namespace DarkStorm;

use Illuminate\Database\Eloquent\Model;

class users_items extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'loot_id'
    ];
}
