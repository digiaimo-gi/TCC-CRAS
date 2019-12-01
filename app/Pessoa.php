<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['nome', 'data_nascimento', 'endereco_id', 'rg', 'cpf'];

    protected $table = 'pessoa';

    public $timestamps = false;

    public function endereco()
    {
        return $this->belongsTo('App\Endereco');
    }
    
    public function telefone()
    {
        return $this->hasMany('App\Telefone');
    }
}
