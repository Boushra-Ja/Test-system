<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlshatbListAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'ques_id',
        'result_id'

    ];
}
