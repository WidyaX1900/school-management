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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('email', 255);
            $table->unsignedBigInteger('major_id');
            $table->unsignedBigInteger('college_class_id');
            $table->timestamps();

            $table->foreign('major_id')
                ->references('id')
                ->on('majors')
                ->cascadeOnDelete();
            
            $table->foreign('college_class_id')
                ->references('id')
                ->on('college_classes')
                ->cascadeOnDelete();
                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
