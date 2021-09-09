<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //CommentモデルはUserクラスに紐づいてます
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    // Commentモデルでtoday_scheduleを唱えるとToday_scheduleのクラスを作る
    public function today_schedules(){
        return $this->hasMany(Today_schedule::class);
    }
}
