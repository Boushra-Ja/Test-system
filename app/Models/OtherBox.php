<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherBox extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_age',
        'end_age',
        'subTitle_id',
   ];

}
