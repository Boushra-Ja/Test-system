<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortageQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'ques_number',
        'box_id',
        'ques_mark',
        'type_id',
        'dim_id',
    ];
}
