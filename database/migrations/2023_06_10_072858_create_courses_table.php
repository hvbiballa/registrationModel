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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('cou_locDistrict')->nullable();//can be null
            $table->string('cou_address')->nullable();
            $table->date('cou_date')->nullable();
            $table->time('cou_startTime')->nullable();
            $table->time('cou_endTime')->nullable();
            $table->string('cou_capacity')->nullable();
            $table->string('cou_issuedDate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
