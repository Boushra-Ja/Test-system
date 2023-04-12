<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DifficultAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'ques_mark',
        'ques_id',
        'child_id',
        'image_answer',
        'ques_answer',
    ];
}
