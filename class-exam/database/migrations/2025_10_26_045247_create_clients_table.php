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
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); // id
            $table->string('name'); // name
            $table->foreignId('team_member_id') 
                  ->constrained('team_members') 
                  ->onDelete('cascade');
            $table->timestamps();
            

            $table->index('team_member_id');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};