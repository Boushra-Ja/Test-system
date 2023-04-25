<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('portage_questions', function (Blueprint $table) {
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('difficult_titles')->constrained()->onDelete('cascade');

        });
    }


    public function down(): void
    {
        Schema::table('portage_questions', function (Blueprint $table) {
            $table->dropColumn('type_id');
        });
    }
};
