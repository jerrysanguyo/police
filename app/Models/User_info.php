<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    use HasFactory;

    protected $table="user_infos";
    protected $fillable=[
        'user_id',
        'birthdate',
        'age',
        'height',
        'weight',
        'waist',
        'hip',
        'wrist',
        'bmi_result',
        'bmi_category',
    ];

    public static function getUser($accountId)
    {
        return self::where('user_id', $accountId)->get();
    }
}
