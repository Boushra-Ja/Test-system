<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DifficultTitle extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
    ];
}
