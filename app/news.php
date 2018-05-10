<?php
/**
 * Created by PhpStorm.
 * User: oscargerman
 * Date: 09/05/18
 * Time: 02:51
 */

namespace DarkStorm;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'description', 'content', 'image'
    ];
}