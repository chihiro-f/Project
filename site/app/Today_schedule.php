<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Today_schedule extends Model
{
    //Today_schedule.php
    
    protected $guarded=[
        'id',
    ];
        
    
    public function getByLimit(int $limit_count=7){
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    
    // Today_scheduleモデルでcommentsを唱えるとCommentのクラスを作る
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
