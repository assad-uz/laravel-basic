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
        Schema::dropIfExists('students');
        Schema::create('students', function (Blueprint $table) {
            $table->id();                          // Primary Key
            $table->string('name');                // Student name
            $table->string('email')->unique();     // Unique email
            $table->string('phone')->nullable();   // Optional phone number
            $table->date('dob')->nullable();       // Date of birth
            $table->timestamps();                  // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
