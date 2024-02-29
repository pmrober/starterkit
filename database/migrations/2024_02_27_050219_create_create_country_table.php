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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('cca2', 2);
            $table->string('ccn3', 3);
            $table->string('cca3', 3);
            $table->string('cioc', 4);
            $table->string('timezone', 10);
            $table->string('currency', 4);
            $table->string('callingcode', 4);
            $table->string('flag', 50);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
