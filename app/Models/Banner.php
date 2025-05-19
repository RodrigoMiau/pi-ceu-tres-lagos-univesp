<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        'administrador_id', 'imagem', 'data_inicio', 'data_fim', 'link',
        'status_banner', 'created_by'
    ];

    public $timestamps = false;

    public function administrador()
    {
        return $this->belongsTo(Administrador::class);
    }
}