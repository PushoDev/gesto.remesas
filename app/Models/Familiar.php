<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Familiar extends Model
{
    // Modelo Familiar
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'date_contrated',
        'cant_envio',
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

    protected $casts = [
        'date_contrated' => 'array',
        'cant_envio' => 'array',
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
}
