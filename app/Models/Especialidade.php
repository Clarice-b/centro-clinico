<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profissional;

class Especialidade extends Model
{
   public function profissionais()
    {
        return $this->belongsToMany(
            Profissional::class,
            'especialidade_profissional'
        )->withPivot('valor_consulta')
         ->withTimestamps();
    } 
}
