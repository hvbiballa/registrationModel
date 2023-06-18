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
        Schema::create('inapplication', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Inc_passportnum', 12);
            $table->string('Inc_bankaccountnum', 20);
            $table->string('Inc_bankname', 50);
            $table->string('Inc_birthplace', 50);
            $table->string('Inc_spouse_passportnum', 20)->nullable(); // Nullable spouse passport number
            $table->string('Inc_job', 50);
            $table->string('Inc_jobtype', 50);
            $table->float('Inc_income');
            $table->string('Inc_companyname', 50);
            $table->string('Inc_companyaddress', 100);
            $table->string('Inc_kin_name', 100);
            $table->string('Inc_kin_relationship', 20);
            $table->integer('Inc_recidency_years');
            $table->date('Inc_date_submitted');
            $table->boolean('Inc_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inapplication');
    }
};
