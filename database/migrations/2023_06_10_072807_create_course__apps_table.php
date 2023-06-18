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
        Schema::create('course__apps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->nullable();
            $table->foreignId('staff_id')->nullable();
            $table->foreignId('course_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('couApp_attendance')->nullable();
            $table->string('couApp_receipt')->nullable();
            $table->string('couApp_approveStatus')->nullable();
            $table->string('couApp_noApp')->nullable();
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course__apps');
    }
};
