<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('difficult_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ques_mark') ;
            $table->integer('ques_id')->unsigned();
            $table->foreign('ques_id')->references('id')->on('difficult_questions')->constrained()->onDelete('cascade');
            $table->integer('child_id')->unsigned();
            $table->foreign('child_id')->references('id')->on('children')->constrained()->onDelete('cascade');
            $table->string('image_answer') ;
            $table->string('ques_answer') ;
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('difficult_answers');
    }
};
