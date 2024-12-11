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
        Schema::create('allotment_statuses', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['active', 'inactive']); // Enum para status
            $table->unsignedBigInteger('created_by'); // Referência para users.id
            $table->timestamps(); 

            // Chave estrangeira para users.id
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allotment_statuses');
    }
};
