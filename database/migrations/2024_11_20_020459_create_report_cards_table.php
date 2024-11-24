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
        Schema::create('report_cards', function (Blueprint $table) {
            $table->id();
            $table->float('grade');
            $table->boolean('approved');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('school_class');
            $table->unsignedBigInteger('teachers_id');
            $table->foreign('teachers_id')->references('id')->on('teachers');
            $table->unsignedBigInteger('disciplines_id');
            $table->foreign('disciplines_id')->references('id')->on('disciplines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_cards');
    }
};
