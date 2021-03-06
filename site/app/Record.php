<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use SoftDeletes;
    
    protected $guarded=[
        'id',
    ];
}
