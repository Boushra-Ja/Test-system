<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('sub_titles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title') ;
            $table->integer('dim_id')->unsigned();
            $table->foreign('dim_id')->references('id')->on('portage_diminssions')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('sub_titles');
    }
};
