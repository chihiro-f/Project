<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    protected $guarded=[
        'id',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10){
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    //NetworkモデルはUserクラスに紐づいてます
    public function user(){
        return $this->belongsTo(User::class);
    }
}
