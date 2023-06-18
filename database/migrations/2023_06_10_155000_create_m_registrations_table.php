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
        Schema::create('m_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->nullable();
            $table->foreignId('spouse_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('wali_id')->nullable();
            $table->foreignId('witness_id')->nullable();
            $table->date('mreg_dateApply')->nullable();
            $table->date('mreg_marriageDate')->nullable();
            $table->string('mreg_marriageAddress')->nullable();
            $table->time('mreg_marriageTime')->nullable();
            $table->string('mreg_masKahwin')->nullable();
            $table->string('mreg_hantaran')->nullable();
            $table->string('mreg_jurunikahName')->nullable();
            $table->string('mreg_resit')->nullable();
            $table->string('mreg_status')->nullable();
            $table->string('mreg_noApp')->nullable(); 
            $table->string('mreg_category')->nullable();
            $table->string('mreg_printStatus')->nullable();
            $table->string('mreg_docuSokongan')->nullable();
            $table->string('mreg_statusApp')->nullable();
            $table->date('mreg_dateStatus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_registrations');
    }
};
