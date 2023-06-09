<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('portage_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ques_number');
            $table->string('question') ;
            $table->string('title') ;
            $table->integer('box_id')->unsigned();
            $table->foreign('box_id')->references('id')->on('boxes')->constrained()->onDelete('cascade');
            $table->integer('ques_mark') ;
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('portage_questions');
    }
};
