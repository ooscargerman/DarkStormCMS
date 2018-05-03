<?php

namespace DarkStorm;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $fillable = [
        'id', 'name', 'price','currency', 'loot_id','type',
    ];
}
