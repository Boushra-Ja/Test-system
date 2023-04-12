<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('question_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image') ;
            $table->integer('ques_id')->unsigned();
            $table->foreign('ques_id')->references('id')->on('difficult_questions')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('question_images');
    }
};
