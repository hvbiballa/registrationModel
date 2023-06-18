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
        Schema::create('witnesses', function (Blueprint $table) {
            $table->id();
            $table->string('wit_name1')->nullable();
            $table->string('wit_icNum1')->nullable();
            $table->string('wit_adress1')->nullable();
            $table->string('wit_noPhone1')->nullable();
            $table->string('wit_age1')->nullable();
            $table->string('wit_name2')->nullable();
            $table->string('wit_icNum2')->nullable();
            $table->string('wit_adress2')->nullable();
            $table->string('wit_noPhone2')->nullable();
            $table->string('wit_age2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('witnesses');
    }
};
