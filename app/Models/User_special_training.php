<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_special_training extends Model
{
    use HasFactory;

    protected $table = 'user_special_trainings';
    protected $fillable = [
        'user_id',
        'special_course_training',
        'duration',
    ];

    public static function getAllSpecial()
    {
        self::all();
    }
}
