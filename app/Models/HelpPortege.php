<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpPortege extends Model
{
    use HasFactory;
    protected $fillable = [
        'start',
        'true',
        'false',
        'child_id',
        'true_box_id'

    ];
}
