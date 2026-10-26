<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    public function movimentacoes()
    {
        return $this->hasMany(Movimentacoes::class);
    }
}
