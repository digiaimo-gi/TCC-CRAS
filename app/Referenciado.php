<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referenciado extends Model
{
    protected $fillable = ['prontuario', 'nome', 'data_nascimento', 'assistente_social', 'status', 'frequencia_cb', 'rg', 
    'cpf', 'nis', 'data_inclusao', 'data_inclusao_paif', 'data_exclusao_paif', 'observacoes', 'data_modificacao', 'endereco_id'];

    protected $table = 'referenciados';

    public $timestamps = false;

    public function endereco()
    {
        return $this->belongsTo('App\Endereco');
    }
    
    public function telefone()
    {
        return $this->belongsToMany('App\Telefone');
    }
}
