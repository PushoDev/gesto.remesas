<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Familiar extends Model
{
    // Modelo Familiar

    // Ingresar Cliente
    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Clientes::class);
    }

    // Ingresar Mensajero
    public function mensajero(): BelongsTo
    {
        return $this->belongsTo(Mensajeros::class);
    }

    // Servicio Contratado
    public function envios(): BelongsTo
    {
        return $this->belongsTo(Envios::class);
    }
}
