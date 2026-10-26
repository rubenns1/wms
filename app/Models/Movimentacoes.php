<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimentacoes extends Model
{
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function localizacao()
    {
        return $this->belongsTo(Localizacao::class);
    }
}
