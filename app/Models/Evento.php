<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    protected $fillable = [
        'administrador_id', 'titulo', 'descricao', 'data_evento', 'hora_evento',
        'local', 'capacidade', 'faixa_etaria_id', 'imagem_evento',
        'banner_evento', 'status_evento', 'created_by'
    ];

    public $timestamps = false;

    public function administrador()
    {
        return $this->belongsTo(Administrador::class);
    }

    public function faixaEtaria()
    {
        return $this->belongsTo(EventoFaixaEtaria::class, 'faixa_etaria_id');
    }
}