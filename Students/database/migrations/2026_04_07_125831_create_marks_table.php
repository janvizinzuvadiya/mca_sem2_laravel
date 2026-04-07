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
            Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->table('users')->constrained();
            $table->foreignId('class_id')->table('classes')->constrained();
            $table->foreignId('exam_id')->table('exams')->constrained();
            $table->foreignId('subject_id')->table('subjects')->constrained();
            $table->integer('marks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
