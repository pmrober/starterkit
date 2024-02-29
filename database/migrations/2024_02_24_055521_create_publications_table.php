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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID del usuario al  que pertenece el anuncio
            $table->string('token', 150);
            $table->string('title', 250);
            $table->text('description')->max(1500);
            $table->string('identity', 10); // OPCIONES: public o hidden
            $table->string('type', 10); // OPCIONES: offer, demand, diffusion.
            $table->unsignedBigInteger('section_id');// ID de la seccion a la que pertenece el anuncio
            $table->unsignedBigInteger('category_id'); //ID del tipo de contenido
            $table->string('sail_type', 10); // OPCIONES: multi-sale o exclusive
            $table->integer('exact_price')->nullable()->default(0);
            $table->integer('min_price')->nullable()->default(0);
            $table->integer('max_price')->nullable()->default(0);
            $table->integer('check_price')->nullable()->default(0); // OPCION: Defecto 0, 1 para consultar precio con el usuario
            $table->integer('currency')->nullable()->default(0);
            $table->timestamp('event_date')->nullable();
            $table->unsignedBigInteger('event_country')->nullable(); // ID del pais de origen del suceso
            $table->unsignedBigInteger('event_city')->nullable(); // ID de la ciudad de origen del suceso
            $table->string('event_population', 50)->nullable();
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('state_id'); // ID del estado en el que se encuentra el anuncio.
            $table->string('preview_url', 200);
            $table->text('keywords')->max(300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
