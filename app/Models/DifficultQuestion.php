<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DifficultQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'level_id',
        'question',

    ];
}
