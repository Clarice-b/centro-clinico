<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Especialidade;

class Profissional extends Model
{
    public function especialidades()
    {
        return $this->belongsToMany(
            Especialidade::class,
            'especialidade_profissional'
        )->withPivot('valor_consulta')
         ->withTimestamps();
    }
}
