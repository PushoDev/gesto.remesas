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
        Schema::create('familiars', function (Blueprint $table) {
            $table->id();
            // Clients Send Services
            $table->foreignId('cliente_id')->constrained('clientes')->cascadeOnDelete();
            // Cantidad Send
            $table->foreignId('envio_id')->constrained('envios')->cascadeOnDelete();
            // Messager Asigned
            $table->foreignId('mensajero_id')->constrained('mensajeros')->cascadeOnDelete();
            $table->string('city_familiar')->nullable();
            $table->string('name_familiar')->nullable();
            $table->string('phone_familiar')->nullable()->unique();
            $table->string('address_familiar')->nullable();
            $table->string('transaccion')->nullable();
            $table->string('type_efectivo')->nullable();
            $table->string('type_transferencia')->nullable();
            $table->string('card_familiar')->nullable();
            $table->string('received_familiar')->nullable();
            $table->boolean('send_reseived')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familiars');
    }
};
