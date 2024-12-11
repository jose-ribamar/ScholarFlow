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

            // Adicionando as 8 notas
            $table->float('grade_1')->nullable(); // Nota do mês 1
            $table->float('grade_2')->nullable(); // Nota do mês 2
            $table->float('grade_3')->nullable(); // Nota do mês 3
            $table->float('grade_4')->nullable(); // Nota do mês 4
            $table->float('grade_5')->nullable(); // Nota do mês 5
            $table->float('grade_6')->nullable(); // Nota do mês 6
            $table->float('grade_7')->nullable(); // Nota do mês 7
            $table->float('grade_8')->nullable(); // Nota do mês 8

            // Indicador de aprovação final (pode ser ajustado conforme seu critério)
            $table->boolean('approved')->nullable();

            // Relacionamentos
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');

            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('classrooms');

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
