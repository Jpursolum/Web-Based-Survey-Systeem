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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable(); // Optional email
            $table->string('client_type'); // Citizen, Business, Government
            $table->date('date');
            $table->string('sex'); // Male, Female, Prefer not to say
            $table->string('age'); // 18-25, 26-35, etc.
            $table->string('region'); // Region of Residence
            $table->string('service_availed'); // Dropdown options
            $table->string('transaction_mode'); // Physical, Online, Both
            $table->string('awareness_cc'); // CC1 question
            $table->string('visibility_cc'); // CC2 question
            $table->string('usefulness_cc'); // CC3 question
            
            // Make survey questions nullable
            $table->string('SQD0')->nullable();
            $table->string('SQD1')->nullable();
            $table->string('SQD2')->nullable();
            $table->string('SQD3')->nullable();
            $table->string('SQD4')->nullable();
            $table->string('SQD5')->nullable();
            $table->string('SQD6')->nullable();
            $table->string('SQD7')->nullable();
            $table->string('SQD8')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
