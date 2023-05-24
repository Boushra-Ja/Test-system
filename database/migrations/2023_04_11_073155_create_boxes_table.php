<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('start_age') ;
            $table->integer('end_age') ;
            $table->Double('mark_age') ;
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('boxes');
    }
};
