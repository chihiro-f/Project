<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    use SoftDeletes;
    
    protected $guarded = [
        'id',
    ];
    
    //CommentモデルはUserクラスに紐づいてます
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    //CommentモデルはToday_scheduleクラスに紐づいてます
    public function today_schedule(){
        return $this->belongsTo(Today_schedule::class);
    }
}
