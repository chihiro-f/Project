<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monthly_schedule extends Model
{
    //
    protected $guarded=[
        'id',
    ];
    
    //Monthly_scheduleモデルはUserクラスに紐づいてます
    public function user(){
        return $this->belongsTo(User::class);
    }
}
