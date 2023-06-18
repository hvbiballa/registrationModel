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
        Schema::create('m_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->nullable();
            $table->foreignId('spouse_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('wali_id')->nullable();
            $table->foreignId('witness_id')->nullable();
            $table->date('mapp_dateApply')->nullable();
            $table->date('mapp_marriageDate')->nullable();
            $table->string('mapp_marriageAddress')->nullable();
            $table->time('mapp_marriageTime')->nullable();
            $table->string('mapp_masKahwin')->nullable();
            $table->string('mapp_hantaran')->nullable();
            $table->string('mapp_jurunikahName')->nullable();
            $table->string('mapp_resit')->nullable();
            $table->string('mapp_status')->nullable();
            $table->string('mapp_noApp')->nullable(); 
            $table->string('mapp_category')->nullable();
            $table->string('mapp_hivStatus')->nullable();
            $table->string('mapp_hivForm')->nullable();
            $table->string('mapp_uploadHIV')->nullable();
            $table->string('mapp_wakalahForm')->nullable();
            $table->string('mapp_uploadWakalah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_applications');
    }
};
