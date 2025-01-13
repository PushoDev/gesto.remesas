<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mensajeros extends Model
{
    // Interactuar con Familiares
    public function familiares(): HasMany
    {
        return $this->hasMany(Familiar::class);
    }
}
