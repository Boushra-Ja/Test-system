<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('alshatb_list_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ques_id')->unsigned();
            $table->foreign('ques_id')->references('id')->on('alshatb_lists')->constrained()->onDelete('cascade');
           

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alshatb_list_answers');
    }
};
