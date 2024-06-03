<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'mobile_number',
        'password',
        'role',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getAllUser()
    {
        return self::all();
    }

    public function userInfo()
    {
        return $this->hasOne(User_info::class, 'user_id', 'id');
    }

    public function userService()
    {
        return $this->hasOne(User_service::class, 'user_id', 'id');
    }

    public function userTraining()
    {
        return $this->hasOne(User_training::class, 'user_id', 'id');
    }

    public function userSpecial()
    {
        return $this->hasOne(User_special_training::class, 'user_id', 'id');
    }
}
