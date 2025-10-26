<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->id(); // id
            $table->foreignId('employee_id') 
                  ->constrained() 
                  ->onDelete('cascade'); 
            $table->string('name'); 
            $table->timestamps();
            
           
            $table->index('employee_id');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};