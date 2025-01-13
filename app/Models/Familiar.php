<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Familiar extends Model
{
    // Modelo Familiar
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'envio_id',
        'mensajero_id',
        'city_familiar',
        'name_familiar',
        'address_familiar',
        'transaccion',
        'type_efectivo',
        'type_transferencia',
        'card_familiar',
        'received_familiar',
        'send_reseived',
    ];

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
