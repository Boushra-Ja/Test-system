<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlshatbList extends Model
{
    use HasFactory;
    protected $fillable = [
        'ques_number',
        'question',
        'box_id',
    ];
}
