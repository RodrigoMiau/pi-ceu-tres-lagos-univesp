<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventoFaixaEtaria extends Model
{
    protected $table = 'eventos_faixa_etaria';

    protected $fillable = [
        'faixa', 
        'title_faixa', 
        'descricao_faixa', 
        'color'
    ];

    public $timestamps = false;

    public function eventos()
    {
        return $this->hasMany(Evento::class, 'faixa_etaria_id');
    }
}