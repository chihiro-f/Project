<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    
    // Userモデルでcommentを唱えるとCommentのクラスを作る
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    // Userモデルでnetworkを唱えるとNetworkのクラスを作る
    public function networks(){
        return $this->hasMany(Network::class);
    }
    
    // Userモデルでmonthly_scheduleを唱えるとMonthly_scheduleのクラスを作る
    public function monthly_schedules(){
        return $this->hasMany(Monthly_schedule::class);
    }
    
    // Userモデルでtoday_scheduleを唱えるとToday_scheduleのクラスを作る
    public function today_schedules(){
        return $this->hasMany(Today_schedule::class);
    }
}
