<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['tipo_logradouro', 'nome_logradouro', 'numero', 'complemento', 'bairro'];

    protected $table = 'enderecos';

    public $timestamps = false;

    public function referenciado()
    {
        return $this->hasOne('App\Referenciado');
    }
}
