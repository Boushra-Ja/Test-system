<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('help_porteges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('start') ;
            $table->integer('true') ;
            $table->integer('false') ;
            $table->integer('true_box_id')->unsigned();
            $table->foreign('true_box_id')->references('id')->on('boxes')->constrained()->onDelete('cascade');
            $table->integer('false_box_id')->unsigned();
            $table->foreign('false_box_id')->references('id')->on('boxes')->constrained()->onDelete('cascade');
            $table->integer('child_id')->unsigned();
            $table->foreign('child_id')->references('id')->on('children')->constrained()->onDelete('cascade');
            $table->integer('mark') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('help_porteges');
    }
};
