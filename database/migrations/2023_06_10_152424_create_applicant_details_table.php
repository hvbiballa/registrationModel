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
        Schema::create('applicant_details', function (Blueprint $table) {
            $table->id();
            $table->string('app_name')->nullable();
            $table->string('app_ic')->nullable();
            $table->date('app_birthdate')->nullable();
            $table->string('app_age')->nullable();
            $table->string('app_nationality')->nullable();
            $table->string('app_houseaddress')->nullable();
            $table->string('app_addressLatest')->nullable();
            $table->string('app_phoneNumber')->nullable();
            $table->string('app_nation')->nullable();
            $table->string('app_education')->nullable();
            $table->string('app_jobSector')->nullable();
            $table->string('app_jobName')->nullable();
            $table->string('app_jobSalary')->nullable();
            $table->string('app_marriageStatus')->nullable();
            $table->string('app_mualafStatus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_details');
    }
};
