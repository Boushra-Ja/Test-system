<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'age',
        'name',
        'date',
        'father_name'
    ];
}
