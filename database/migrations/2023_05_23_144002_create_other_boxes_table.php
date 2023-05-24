<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('other_boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('start_age') ;
            $table->integer('end_age') ;
            $table->integer('subTitle_id')->unsigned();
            $table->foreign('subTitle_id')->references('id')->on('sub_titles')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('other_boxes');
    }
};
