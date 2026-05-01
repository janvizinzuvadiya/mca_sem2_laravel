<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('enrollment_no',20)->unique();
            $table->string('full_name',100);
            $table->string('email',100)->unique();
            $table->string('course',50);
            $table->date('joining_date');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
