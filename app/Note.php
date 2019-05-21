<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Note extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'schedule'
    ];

    protected $dates = [
        'schedule'
    ];
}
