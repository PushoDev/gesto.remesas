<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Envios extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad_send',
        'date_contrated',
    ];

    // Interactuar con Familiares
    public function familiares(): HasMany
    {
        return $this->hasMany(Familiar::class);
    }
}
