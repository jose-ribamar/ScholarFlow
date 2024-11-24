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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->date('registration_date');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('Students');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('Classes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
