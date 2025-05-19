<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administrador';

    protected $fillable = [
        'nome_local', 
        'cep', 
        'endereco', 
        'numero', 
        'bairro',
        'cidade', 
        'estado', 
        'email', 
        'contato',
    ];

    public $timestamps = false;

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }

    public function usuarios()
    {
        return $this->hasMany(UsuarioAdmin::class);
    }
}