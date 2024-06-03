<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_service extends Model
{
    use HasFactory;

    protected $table="user_services";
    protected $fillable=[
        'user_id',
        'rank',
        'qlrf',
        'badge_number',
        'entered_service',
        'last_promotion',
        'unit'
    ];

    // public static function getAllService()
    // {
    //     self::all();
    // }

    public static function getUser($accountId)
    {
        return self::where('user_id', $accountId)->get();
    }
}
