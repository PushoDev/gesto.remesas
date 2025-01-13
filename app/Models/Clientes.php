<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clientes extends Model
{
    use HasFactory;

    // Interactuar con Familiares
    public function familiares(): HasMany
    {
        return $this->hasMany(Familiar::class);
    }
}
