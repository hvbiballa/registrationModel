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
        Schema::create('m_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->nullable();
            $table->foreignId('spouse_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('mregistration_id')->nullable();
            $table->string('mcard_ApplicantPhoto')->nullable();
            $table->string('mcard_SpousePhoto')->nullable();
            $table->string('mcard_receipt')->nullable();
            $table->string('mcard_status')->nullable();
            $table->date('mcard_dateApproval')->nullable();
            $table->string('mcard_printStatus')->nullable();
            $table->string('mcard_noApp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_cards');
    }
};
