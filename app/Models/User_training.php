<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_training extends Model
{
    use HasFactory;

    protected $table = 'user_trainings';
    protected $fillable = [
        'user_id',
        'mandatory_training',
        'date_graduation',
        'order_of_merit',
        'ftoc',
        'qe_result',
        'date_qualifying_exam'
    ];

    public static function getAllTraining()
    {
        self::all();
    }
}
