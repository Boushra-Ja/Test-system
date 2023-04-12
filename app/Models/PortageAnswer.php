<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortageAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'ques_id',
        'child_id',
        'ques_mark',

    ];
}
