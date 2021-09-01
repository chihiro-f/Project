<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Today_schedule extends Model
{
    //Today_schedule.php
    
    protected $fillable=[
        'title',
        'content',
    ];
        
    
    public function getByLimit(int $limit_count=7){
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
    }
}
