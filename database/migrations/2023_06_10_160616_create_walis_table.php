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
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->string('wali_name')->nullable();
            $table->string('wali_ic')->nullable();
            $table->string('wali_age')->nullable();
            $table->date('wali_birthdate')->nullable();
            $table->string('wali_phoneNum')->nullable();
            $table->string('wali_relationship')->nullable();
            $table->string('wali_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('walis');
    }
};
